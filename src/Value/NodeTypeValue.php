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

/**
 * @package Jojo1981\JsonPathAstBuilder\Value
 */
class NodeTypeValue extends AbstractEnumValue
{
    /** @var string */
    public const NODE_TYPE_OBJECT = 'object';

    /** @var string */
    public const NODE_TYPE_ARRAY = 'array';

    /** @var string */
    public const NODE_TYPE_STRING = 'string';

    /** @var string */
    public const NODE_TYPE_NUMBER = 'number';

    /** @var string */
    public const NODE_TYPE_BOOLEAN = 'boolean';

    /** @var string */
    public const NODE_TYPE_NULL = 'null';

    /**
     * @return string[]
     */
    protected function getEnumValues(): array
    {
        static::getValidValues();
    }

    /**
     * @return bool
     */
    public function isObject(): bool
    {
        return static::NODE_TYPE_OBJECT === $this->getValue();
    }

    /**
     * @return bool
     */
    public function isArray(): bool
    {
        return static::NODE_TYPE_ARRAY === $this->getValue();
    }

    /**
     * @return bool
     */
    public function isString(): bool
    {
        return static::NODE_TYPE_STRING === $this->getValue();
    }


    /**
     * @return bool
     */
    public function isNumber(): bool
    {
        return static::NODE_TYPE_NUMBER === $this->getValue();
    }

    /**
     * @return bool
     */
    public function isBoolean(): bool
    {
        return static::NODE_TYPE_NUMBER === $this->getValue();
    }

    /**
     * @return bool
     */
    public function isNull(): bool
    {
        return static::NODE_TYPE_NULL === $this->getValue();
    }

    /**
     * @throws ValueException
     * @return NodeTypeValue
     */
    public static function object(): NodeTypeValue
    {
        return new static(static::NODE_TYPE_OBJECT);
    }

    /**
     * @throws ValueException
     * @return NodeTypeValue
     */
    public static function array(): NodeTypeValue
    {
        return new static(static::NODE_TYPE_ARRAY);
    }

    /**
     * @throws ValueException
     * @return NodeTypeValue
     */
    public static function string(): NodeTypeValue
    {
        return new static(static::NODE_TYPE_STRING);
    }

    /**
     * @throws ValueException
     * @return NodeTypeValue
     */
    public static function number(): NodeTypeValue
    {
        return new static(static::NODE_TYPE_NUMBER);
    }

    /**
     * @throws ValueException
     * @return NodeTypeValue
     */
    public static function boolean(): NodeTypeValue
    {
        return new static(static::NODE_TYPE_BOOLEAN);
    }

    /**
     * @throws ValueException
     * @return NodeTypeValue
     */
    public static function null(): NodeTypeValue
    {
        return new static(static::NODE_TYPE_NULL);
    }

    /**
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            static::NODE_TYPE_OBJECT,
            static::NODE_TYPE_ARRAY,
            static::NODE_TYPE_STRING,
            static::NODE_TYPE_NUMBER,
            static::NODE_TYPE_BOOLEAN,
            static::NODE_TYPE_NULL
        ];
    }
}