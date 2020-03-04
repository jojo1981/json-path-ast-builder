<?php declare(strict_types=1);
/*
 * This file is part of the jojo1981/json-path-ast-builder package
 *
 * Copyright (c) 2020 Joost Nijhuis <jnijhuis81@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed in the root of the source code
 */
namespace Jojo1981\JsonPathAstBuilder\Ast\FieldAccessor;

use Jojo1981\JsonPathAstBuilder\Ast\FieldAccessorInterface;
use Jojo1981\JsonPathAstBuilder\VisitableInterface;
use Jojo1981\JsonPathAstBuilder\VisitorInterface;

/**
 * @package Jojo1981\JsonPathAstBuilder\Ast\FieldAccessor
 */
class MultiField implements FieldAccessorInterface, VisitableInterface
{
    /** @var string[] */
    private $fieldNames;

    /**
     * @param string[] $fieldNames
     */
    public function __construct(array $fieldNames)
    {
        $this->fieldNames = $fieldNames;
    }

    /**
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->fieldNames;
    }

    /**
     * @param VisitorInterface $visitor
     * @return mixed
     */
    public function accept(VisitorInterface $visitor)
    {
        return $visitor->visitMultiField($this);
    }
}