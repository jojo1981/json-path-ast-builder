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

use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\LogicalOperatorInterface;
use Jojo1981\JsonPathAstBuilder\Ast\FilterNodeInterface;
use Jojo1981\JsonPathAstBuilder\VisitableInterface;
use Jojo1981\JsonPathAstBuilder\VisitorInterface;

/**
 * @package Jojo1981\JsonPathAstBuilder\Ast\FilterToken
 */
class BooleanFilter implements FilterNodeInterface, VisitableInterface
{
    /** @var LogicalOperatorInterface */
    private LogicalOperatorInterface $operator;

    /** @var FilterNodeInterface */
    private FilterNodeInterface $lhs;

    /** @var FilterNodeInterface */
    private FilterNodeInterface $rhs;

    /**
     * @param LogicalOperatorInterface $operator
     * @param FilterNodeInterface $lhs
     * @param FilterNodeInterface $rhs
     */
    public function __construct(LogicalOperatorInterface $operator, FilterNodeInterface $lhs, FilterNodeInterface $rhs)
    {
        $this->operator = $operator;
        $this->lhs = $lhs;
        $this->rhs = $rhs;
    }

    /**
     * @return LogicalOperatorInterface
     */
    public function getOperator(): LogicalOperatorInterface
    {
        return $this->operator;
    }

    /**
     * @return FilterNodeInterface
     */
    public function getLhs(): FilterNodeInterface
    {
        return $this->lhs;
    }

    /**
     * @return FilterNodeInterface
     */
    public function getRhs(): FilterNodeInterface
    {
        return $this->rhs;
    }

    /**
     * @param VisitorInterface $visitor
     * @return mixed
     */
    public function accept(VisitorInterface $visitor): mixed
    {
        return $visitor->visitBooleanFilter($this);
    }
}
