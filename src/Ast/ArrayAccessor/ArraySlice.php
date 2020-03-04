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
class ArraySlice implements ArrayAccessorInterface, VisitableInterface
{
    /** @var null|int */
    private $start;

    /** @var null|int */
    private $stop;

    /** @var int */
    private $step;

    /**
     * @param null|int $start
     * @param null|int $stop
     * @param int $step
     */
    public function __construct(?int $start = null, ?int $stop = null, int $step = 1)
    {
        $this->start = $start;
        $this->stop = $stop;
        $this->step = $step;
    }

    /**
     * @return null|int
     */
    public function getStart(): ?int
    {
        return $this->start;
    }

    /**
     * @return null|int
     */
    public function getStop(): ?int
    {
        return $this->stop;
    }

    /**
     * @return int
     */
    public function getStep(): int
    {
        return $this->step;
    }

    /**
     * @param VisitorInterface $visitor
     * @return mixed
     */
    public function accept(VisitorInterface $visitor)
    {
        return $visitor->visitArraySlice($this);
    }
}