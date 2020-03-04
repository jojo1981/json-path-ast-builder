<?php declare(strict_types=1);
/*
 * This file is part of the jojo1981/json-path-ast-builder package
 *
 * Copyright (c) 2020 Joost Nijhuis <jnijhuis81@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed in the root of the source code
 */
namespace Jojo1981\JsonPathAstBuilder\Ast\ArrayAccessor;

use Jojo1981\JsonPathAstBuilder\Ast\ArrayAccessorInterface;
use Jojo1981\JsonPathAstBuilder\VisitableInterface;
use Jojo1981\JsonPathAstBuilder\VisitorInterface;

/**
 * @package Jojo1981\JsonPathAstBuilder\Ast\ArrayAccessor
 */
class ArrayRandomAccess implements ArrayAccessorInterface, VisitableInterface
{
    /** @var int[] */
    private $indexes;

    /**
     * @param int[] $indexes
     */
    public function __construct(array $indexes)
    {
        $this->indexes = $indexes;
    }

    /**
     * @return int[]
     */
    public function getIndexes(): array
    {
        return $this->indexes;
    }

    /**
     * @param VisitorInterface $visitor
     * @return mixed
     */
    public function accept(VisitorInterface $visitor)
    {
        return $visitor->visitArrayRandomAccess($this);
    }
}