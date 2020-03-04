<?php declare(strict_types=1);
/*
 * This file is part of the jojo1981/json-path-ast-builder package
 *
 * Copyright (c) 2020 Joost Nijhuis <jnijhuis81@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed in the root of the source code
 */
namespace Jojo1981\JsonPathAstBuilder\Ast;

use Jojo1981\JsonPathAstBuilder\VisitableInterface;
use Jojo1981\JsonPathAstBuilder\VisitorInterface;

/**
 * @package Jojo1981\JsonPathAstBuilder\Ast
 */
class RecursiveFilterToken implements PathNodeInterface, VisitableInterface
{
    /** @var FilterNodeInterface */
    private $filter;

    /**
     * @param FilterNodeInterface $filter
     */
    public function __construct(FilterNodeInterface $filter)
    {
        $this->filter = $filter;
    }

    /**
     * @return FilterNodeInterface
     */
    public function getFilter(): FilterNodeInterface
    {
        return $this->filter;
    }

    /**
     * @param VisitorInterface $visitor
     * @return mixed
     */
    public function accept(VisitorInterface $visitor)
    {
        return $visitor->visitRecursiveFilterToken($this);
    }
}