<?php
/*
 * This file is part of the jojo1981/json-path-ast-builder package
 *
 * Copyright (c) 2025 Joost Nijhuis <jnijhuis81@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed in the root of the source code
 */
declare(strict_types=1);

namespace tests\Jojo1981\JsonPathAstBuilder;

use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
use InvalidArgumentException;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\ComparisonOperator\EqualOperator;
use Jojo1981\JsonPathAstBuilder\Ast\CurrentNode;
use Jojo1981\JsonPathAstBuilder\Ast\FieldAccessor\Field;
use Jojo1981\JsonPathAstBuilder\Ast\FieldAccessor\RootNode;
use Jojo1981\JsonPathAstBuilder\Ast\FilterToken\ComparisonFilter;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\FilterDirectValue\FilterDirectValueString;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\SubQuery;
use Jojo1981\JsonPathAstBuilder\Ast\PathNodeInterface;
use Jojo1981\JsonPathAstBuilder\AstBuilder;
use PHPUnit\Framework\TestCase;

/**
 * @package tests\Jojo1981\JsonPathAstBuilder
 */
final class AstBuilderTest extends TestCase
{
    /**
     * @return void
     * @throws InvalidArgumentException
     * @throws RecognitionException
     */
    public function testAstBuilder(): void
    {
        $astBuilder = new AstBuilder();
        $actualAst = $astBuilder->buildAst('$.book[?(@.author==$.authors[?(@.pseudo==\'Hugo\')].name)].title');
        self::assertEquals(self::getExpectedAst(), $actualAst);
    }

    /**
     * @return PathNodeInterface[]
     */
    private static function getExpectedAst(): array
    {
        return [
            new RootNode(),
            new Field('book'),
            new ComparisonFilter(
                new EqualOperator(),
                new SubQuery([
                    new CurrentNode(),
                    new Field('author')
                ]),
                new SubQuery([
                    new RootNode(),
                    new Field('authors'),
                    new ComparisonFilter(
                        new EqualOperator(),
                        new SubQuery([
                            new CurrentNode(),
                            new Field('pseudo')
                        ]),
                        new FilterDirectValueString('Hugo')
                    ),
                    new Field('name')
                ])
            ),
            new Field('title')
        ];
    }
}
