<?php declare(strict_types=1);
/*
 * This file is part of the jojo1981/json-path-ast-builder package
 *
 * Copyright (c) 2020 Joost Nijhuis <jnijhuis81@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed in the root of the source code
 */
namespace Jojo1981\JsonPathAstBuilder\Ast\FilterToken;

use Jojo1981\JsonPathAstBuilder\Ast\FilterNodeInterface;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\SubQuery;
use Jojo1981\JsonPathAstBuilder\VisitableInterface;
use Jojo1981\JsonPathAstBuilder\VisitorInterface;

/**
 * @package Jojo1981\JsonPathAstBuilder\Ast\FilterToken
 */
class HasFilter implements FilterNodeInterface, VisitableInterface
{
    /** @var SubQuery */
    private $query;

    /**
     * @param SubQuery $query
     */
    public function __construct(SubQuery $query)
    {
        $this->query = $query;
    }

    /**
     * @return SubQuery
     */
    public function getQuery(): SubQuery
    {
        return $this->query;
    }

    /**
     * @param VisitorInterface $visitor
     * @return mixed
     */
    public function accept(VisitorInterface $visitor)
    {
        return $visitor->visitHasFilter($this);
    }
}