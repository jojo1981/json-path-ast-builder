<?php declare(strict_types=1);
/*
 * This file is part of the jojo1981/json-path-ast-builder package
 *
 * Copyright (c) 2020 Joost Nijhuis <jnijhuis81@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed in the root of the source code
 */
namespace Jojo1981\JsonPathAstBuilder\Value;

use Jojo1981\JsonPathAstBuilder\Value\Exception\ValueException;
use function preg_match;
use function sprintf;
use function trim;

/**
 * @package Jojo1981\JsonPathAstBuilder\Value
 */
abstract class AbstractStringValue implements ValueInterface
{
    /** @var string */
    private $value;

    /**
     * @param string $value
     * @throws ValueException
     */
    final public function __construct(string $value)
    {
        $this->value = $this->assertValue($value);
    }

    /**
     * @return string
     */
    final public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return string
     */
    abstract protected function getPattern(): string;

    /**
     * @param string $value
     * @throws ValueException
     * @return string
     */
    private function assertValue(string $value): string
    {
        $pattern = '/' . trim($this->getPattern(), '/') . '/';
        if (1 !== preg_match($pattern, $value)) {
            throw new ValueException(sprintf(
                'Invalid value: `%s` given. The value does NOT match the regular expression pattern: `%s`',
                $value,
                $pattern
            ));
        }

        return $value;
    }
}