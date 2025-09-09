<?php
/*
 * This file is part of the jojo1981/json-path-ast-builder package
 *
 * Copyright (c) 2020 Joost Nijhuis <jnijhuis81@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed in the root of the source code
 */
namespace tests\Jojo1981\JsonPathAstBuilder;

use Jojo1981\JsonPathAstBuilder\JsonPath;
use LogicException;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\RecursionContext\InvalidArgumentException;

/**
 * @package tests\Jojo1981\JsonPathAstBuilder
 */
class JsonPathTests extends TestCase
{
    /**
     * @throws LogicException
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     * @return void
     */
    public function test1(): void
    {
        $this->assertFalse(JsonPath::jsonPath($this->getTestData1(), '$'));

        $this->assertEquals(
            [
                [
                    'firstName' => 'John',
                    'lastName' => 'doe',
                    'age' => 26,
                    'address' =>
                        [
                            'streetAddress' => 'naist street',
                            'city' => 'Nara',
                            'postalCode' => '630-0192'
                        ],
                    'phoneNumbers' =>
                        [
                            [
                                'type' => 'iPhone',
                                'number' => '0123-4567-8888'
                            ],
                            [
                                'type' => 'home',
                                'number' => '0123-4567-8910'
                            ],
                        ],
                ],
                [
                    'streetAddress' => 'naist street',
                    'city' => 'Nara',
                    'postalCode' => '630-0192'
                ],
                [
                    [
                        'type' => 'iPhone',
                        'number' => '0123-4567-8888'
                    ],
                    [
                        'type' => 'home',
                        'number' => '0123-4567-8910'
                    ]
                ],
                [
                    'type' => 'iPhone',
                    'number' => '0123-4567-8888'
                ],
                [
                    'type' => 'home',
                    'number' => '0123-4567-8910'
                ]
            ],
            JsonPath::jsonPath($this->getTestData1(), '$..')
        );

        $this->assertEquals(
            [
                'John',
                'doe',
                26,
                [
                    'streetAddress' => 'naist street',
                    'city' => 'Nara',
                    'postalCode' => '630-0192',
                ],
                [
                    [
                        'type' => 'iPhone',
                        'number' => '0123-4567-8888',
                    ],
                    [
                        'type' => 'home',
                        'number' => '0123-4567-8910',
                    ],
                ],
                'naist street',
                'Nara',
                '630-0192',
                [
                    'type' => 'iPhone',
                    'number' => '0123-4567-8888',
                ],
                [
                    'type' => 'home',
                    'number' => '0123-4567-8910',
                ],
                'iPhone',
                '0123-4567-8888',
                'home',
                '0123-4567-8910',
            ],
            JsonPath::jsonPath($this->getTestData1(), '$..*')
        );

        $this->assertEquals(
            ['iPhone', 'home'],
            JsonPath::jsonPath($this->getTestData1(), '$.phoneNumbers[*].type')
        );
    }

    /**
     * @throws ExpectationFailedException
     * @throws LogicException
     * @throws InvalidArgumentException
     * @return void
     */
    public function test2(): void
    {
        $this->assertEquals(
            ['Sayings of the Century'],
            JsonPath::jsonPath($this->getTestData2(), '$.store.book[0].title')
        );
        $this->assertEquals(
            ['Sayings of the Century'],
            JsonPath::jsonPath($this->getTestData2(), '$[\'store\'][\'book\'][0][\'title\']')
        );
        $this->assertEquals(
            ['Nigel Rees', 'Evelyn Waugh', 'Herman Melville', 'J. R. R. Tolkien'],
            JsonPath::jsonPath($this->getTestData2(), '$.store.book[*].author')
        );
        $this->assertEquals(
            ['Nigel Rees', 'Evelyn Waugh', 'Herman Melville', 'J. R. R. Tolkien'],
            JsonPath::jsonPath($this->getTestData2(), '$..author')
        );

        $this->assertEquals(
            [
                [
                    [
                        'category' => 'reference',
                        'author' => 'Nigel Rees',
                        'title' => 'Sayings of the Century',
                        'price' => 8.95
                    ],
                    [
                        'category' => 'fiction',
                        'author' => 'Evelyn Waugh',
                        'title' => 'Sword of Honour',
                        'price' => 12.99
                    ],
                    [
                        'category' => 'fiction',
                        'author' => 'Herman Melville',
                        'title' => 'Moby Dick',
                        'isbn' => '0-553-21311-3',
                        'price' => 8.99
                    ],
                    [
                        'category' => 'fiction',
                        'author' => 'J. R. R. Tolkien',
                        'title' => 'The Lord of the Rings',
                        'isbn' => '0-395-19395-8',
                        'price' => 22.99
                    ]
                ],
                [
                    'color' => 'red',
                    'price' => 19.95
                ]
            ],
            JsonPath::jsonPath($this->getTestData2(), '$.store.*')
        );

        // All prices (from all books and bicycles)
        $this->assertEquals(
            [8.95, 12.99, 8.99, 22.99, 19.95],
            JsonPath::jsonPath($this->getTestData2(), '$.store..price')
        );

        // The third book
        $this->assertEquals(
            [
                [
                    'category' => 'fiction',
                    'author' => 'Herman Melville',
                    'title' => 'Moby Dick',
                    'isbn' => '0-553-21311-3',
                    'price' => 8.99
                ]
            ],
            JsonPath::jsonPath($this->getTestData2(), '$..book[2]')
        );

        $this->assertFalse(JsonPath::jsonPath($this->getTestData2(), '$..book[6]'));

//        // The last book
//        $this->assertEquals(
//            [
//                [
//                    'category' => 'fiction',
//                    'author' => 'J. R. R. Tolkien',
//                    'title' => 'The Lord of the Rings',
//                    'isbn' => '0-395-19395-8',
//                    'price' => 22.99
//                ]
//            ],
//            JsonPath::jsonPath($this->getTestData2(), '$..book[(@.length-1)]')
//        );

        // The last book
        $this->assertEquals(
            [
                [
                    'category' => 'fiction',
                    'author' => 'J. R. R. Tolkien',
                    'title' => 'The Lord of the Rings',
                    'isbn' => '0-395-19395-8',
                    'price' => 22.99
                ]
            ],
            JsonPath::jsonPath($this->getTestData2(), '$..book[-1:]')
        );

        $this->assertEquals(
            [
                [
                    'category' => 'reference',
                    'author' => 'Nigel Rees',
                    'title' => 'Sayings of the Century',
                    'price' => 8.95
                ],
                [
                    'category' => 'fiction',
                    'author' => 'Evelyn Waugh',
                    'title' => 'Sword of Honour',
                    'price' => 12.99
                ]
            ],
            JsonPath::jsonPath($this->getTestData2(), '$..book[0,1]')
        );

        $this->assertEquals(
            [
                [
                    'category' => 'reference',
                    'author' => 'Nigel Rees',
                    'title' => 'Sayings of the Century',
                    'price' => 8.95
                ],
                [
                    'category' => 'fiction',
                    'author' => 'Evelyn Waugh',
                    'title' => 'Sword of Honour',
                    'price' => 12.99
                ]
            ],
            JsonPath::jsonPath($this->getTestData2(), '$..book[:2]')
        );

        $this->assertEquals(
            [
                [
                    'category' => 'fiction',
                    'author' => 'Herman Melville',
                    'title' => 'Moby Dick',
                    'isbn' => '0-553-21311-3',
                    'price' => 8.99
                ],
                [
                    'category' => 'fiction',
                    'author' => 'J. R. R. Tolkien',
                    'title' => 'The Lord of the Rings',
                    'isbn' => '0-395-19395-8',
                    'price' => 22.99
                ]
            ],
            JsonPath::jsonPath($this->getTestData2(), '$..book[?(@.isbn)]')
        );

        $this->assertEquals(
            [
                [
                    'category' => 'reference',
                    'author' => 'Nigel Rees',
                    'title' => 'Sayings of the Century',
                    'price' => 8.95
                ],
                [
                    'category' => 'fiction',
                    'author' => 'Herman Melville',
                    'title' => 'Moby Dick',
                    'isbn' => '0-553-21311-3',
                    'price' => 8.99
                ]
            ],
            JsonPath::jsonPath($this->getTestData2(), '$..book[?(@[\'price\']<10)]')
        );

        $this->assertEquals(
            [
                [
                    'category' => 'reference',
                    'author' => 'Nigel Rees',
                    'title' => 'Sayings of the Century',
                    'price' => 8.95
                ],
                [
                    'category' => 'fiction',
                    'author' => 'Herman Melville',
                    'title' => 'Moby Dick',
                    'isbn' => '0-553-21311-3',
                    'price' => 8.99
                ]
            ],
            JsonPath::jsonPath($this->getTestData2(), '$..book[?(@.price < 10)]')
        );

        $this->assertEquals(
            [
                [
                    'store' =>
                        [
                            'book' =>
                                [
                                    [
                                        'category' => 'reference',
                                        'author' => 'Nigel Rees',
                                        'title' => 'Sayings of the Century',
                                        'price' => 8.95
                                    ],
                                    [
                                        'category' => 'fiction',
                                        'author' => 'Evelyn Waugh',
                                        'title' => 'Sword of Honour',
                                        'price' => 12.99
                                    ],
                                    [
                                        'category' => 'fiction',
                                        'author' => 'Herman Melville',
                                        'title' => 'Moby Dick',
                                        'isbn' => '0-553-21311-3',
                                        'price' => 8.99
                                    ],
                                    [
                                        'category' => 'fiction',
                                        'author' => 'J. R. R. Tolkien',
                                        'title' => 'The Lord of the Rings',
                                        'isbn' => '0-395-19395-8',
                                        'price' => 22.99
                                    ]
                                ],
                            'bicycle' =>
                                [
                                    'color' => 'red',
                                    'price' => 19.95
                                ]
                        ],
                ],
                [
                    'book' =>
                        [
                            [
                                'category' => 'reference',
                                'author' => 'Nigel Rees',
                                'title' => 'Sayings of the Century',
                                'price' => 8.95
                            ],
                            [
                                'category' => 'fiction',
                                'author' => 'Evelyn Waugh',
                                'title' => 'Sword of Honour',
                                'price' => 12.99
                            ],
                            [
                                'category' => 'fiction',
                                'author' => 'Herman Melville',
                                'title' => 'Moby Dick',
                                'isbn' => '0-553-21311-3',
                                'price' => 8.99
                            ],
                            [
                                'category' => 'fiction',
                                'author' => 'J. R. R. Tolkien',
                                'title' => 'The Lord of the Rings',
                                'isbn' => '0-395-19395-8',
                                'price' => 22.99
                            ]
                        ],
                    'bicycle' =>
                        [
                            'color' => 'red',
                            'price' => 19.95
                        ]
                ],
                [
                    [
                        'category' => 'reference',
                        'author' => 'Nigel Rees',
                        'title' => 'Sayings of the Century',
                        'price' => 8.95
                    ],
                    [
                        'category' => 'fiction',
                        'author' => 'Evelyn Waugh',
                        'title' => 'Sword of Honour',
                        'price' => 12.99
                    ],
                    [
                        'category' => 'fiction',
                        'author' => 'Herman Melville',
                        'title' => 'Moby Dick',
                        'isbn' => '0-553-21311-3',
                        'price' => 8.99
                    ],
                    [
                        'category' => 'fiction',
                        'author' => 'J. R. R. Tolkien',
                        'title' => 'The Lord of the Rings',
                        'isbn' => '0-395-19395-8',
                        'price' => 22.99
                    ]
                ],
                [
                    'category' => 'reference',
                    'author' => 'Nigel Rees',
                    'title' => 'Sayings of the Century',
                    'price' => 8.95,
                ],
                [
                    'category' => 'fiction',
                    'author' => 'Evelyn Waugh',
                    'title' => 'Sword of Honour',
                    'price' => 12.99
                ],
                [
                    'category' => 'fiction',
                    'author' => 'Herman Melville',
                    'title' => 'Moby Dick',
                    'isbn' => '0-553-21311-3',
                    'price' => 8.99
                ],
                [
                    'category' => 'fiction',
                    'author' => 'J. R. R. Tolkien',
                    'title' => 'The Lord of the Rings',
                    'isbn' => '0-395-19395-8',
                    'price' => 22.99
                ],
                [
                    'color' => 'red',
                    'price' => 19.95
                ]
            ],
            JsonPath::jsonPath($this->getTestData2(), '$..')
        );
    }

    /**
     * @throws ExpectationFailedException
     * @throws LogicException
     * @throws InvalidArgumentException
     * @return void
     */
    public function test3(): void
    {
        // The last book
        $this->assertEquals(
            [
                [
                    'category' => 'fiction',
                    'author' => 'J. R. R. Tolkien',
                    'title' => 'The Lord of the Rings',
                    'isbn' => '0-395-19395-8',
                    'price' => 22.99
                ]
            ],
            JsonPath::jsonPath($this->getTestData2(), '$..book[(@.length-1)]')
        );
    }

    /**
     * @return array
     */
    private function getTestData1(): array
    {
        return [
            'firstName' => 'John',
            'lastName' => 'doe',
            'age' => 26,
            'address' => [
                'streetAddress' => 'naist street',
                'city' => 'Nara',
                'postalCode' => '630-0192'
            ],
            'phoneNumbers' => [
                [
                    'type' => 'iPhone',
                    'number' => '0123-4567-8888'
                ],
                [
                    'type' => 'home',
                    'number' => '0123-4567-8910'
                ]
            ]
        ];
    }

    /**
     * @return array
     */
    private function getTestData2(): array
    {
        return [
            'store' => [
                'book' => [
                    [
                        'category' => 'reference',
                        'author' => 'Nigel Rees',
                        'title' => 'Sayings of the Century',
                        'price' => 8.95
                    ],
                    [
                        'category' => 'fiction',
                        'author' => 'Evelyn Waugh',
                        'title' => 'Sword of Honour',
                        'price' => 12.99
                    ],
                    [
                        'category' => 'fiction',
                        'author' => 'Herman Melville',
                        'title' => 'Moby Dick',
                        'isbn' => '0-553-21311-3',
                        'price' => 8.99
                    ],
                    [
                        'category' => 'fiction',
                        'author' => 'J. R. R. Tolkien',
                        'title' => 'The Lord of the Rings',
                        'isbn' => '0-395-19395-8',
                        'price' => 22.99
                    ]
                ],
                'bicycle' => [
                    'color' => 'red',
                    'price' => 19.95
                ]
            ]
        ];
    }
}