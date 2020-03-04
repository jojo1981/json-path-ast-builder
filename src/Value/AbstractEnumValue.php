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

use function array_map;
use function implode;
use function preg_quote;

/**
 * @package Jojo1981\JsonPathAstBuilder\Value
 */
abstract class AbstractEnumValue extends AbstractStringValue
{
    /**
     * @return string
     */
    final protected function getPattern(): string
    {
        return '(' . implode('|', $this->getEscapedEnumValues()) . ')';
    }

    /**
     * @return string[]
     */
    private function getEscapedEnumValues(): array
    {
        return array_map(
            static function (string $value): string {
                return preg_quote($value, '/');
            },
            $this->getEnumValues()
        );
    }

    /**
     * @return string[]
     */
    abstract protected function getEnumValues(): array;
}