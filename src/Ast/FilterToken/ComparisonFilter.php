<?php
/*
 * This file is part of the jojo1981/json-path-ast-builder package
 *
 * Copyright (c) 2020 Joost Nijhuis <jnijhuis81@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed in the root of the source code
 */
declare(strict_types=1);

namespace Jojo1981\JsonPathAstBuilder\Ast\FilterToken;

use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\ComparisonOperatorInterface;
use Jojo1981\JsonPathAstBuilder\Ast\FilterNodeInterface;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValueInterface;
use Jojo1981\JsonPathAstBuilder\VisitableInterface;
use Jojo1981\JsonPathAstBuilder\VisitorInterface;

/**
 * @package Jojo1981\JsonPathAstBuilder\Ast\FilterToken
 */
class ComparisonFilter implements FilterNodeInterface, VisitableInterface
{
    /** @var ComparisonOperatorInterface */
    private ComparisonOperatorInterface $operator;

    /** @var FilterValueInterface */
    private FilterValueInterface $lhs;

    /** @var FilterValueInterface */
    private FilterValueInterface $rhs;

    /**
     * @param ComparisonOperatorInterface $operator
     * @param FilterValueInterface $lhs
     * @param FilterValueInterface $rhs
     */
    public function __construct(ComparisonOperatorInterface $operator, FilterValueInterface $lhs, FilterValueInterface $rhs)
    {
        $this->operator = $operator;
        $this->lhs = $lhs;
        $this->rhs = $rhs;
    }

    /**
     * @return ComparisonOperatorInterface
     */
    public function getOperator(): ComparisonOperatorInterface
    {
        return $this->operator;
    }

    /**
     * @return FilterValueInterface
     */
    public function getLhs(): FilterValueInterface
    {
        return $this->lhs;
    }

    /**
     * @return FilterValueInterface
     */
    public function getRhs(): FilterValueInterface
    {
        return $this->rhs;
    }

    /**
     * @param VisitorInterface $visitor
     * @return mixed
     */
    public function accept(VisitorInterface $visitor): mixed
    {
        return $visitor->visitComparisonFilter($this);
    }
}
