<?php declare(strict_types=1);
/*
 * This file is part of the jojo1981/json-path-ast-builder package
 *
 * Copyright (c) 2020 Joost Nijhuis <jnijhuis81@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed in the root of the source code
 */
namespace Jojo1981\JsonPathAstBuilder\Ast\FilterValue\FilterDirectValue;

use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\FilterDirectValueInterface;
use Jojo1981\JsonPathAstBuilder\VisitableInterface;
use Jojo1981\JsonPathAstBuilder\VisitorInterface;

/**
 * @package Jojo1981\JsonPathAstBuilder\Ast\FilterValue\FilterDirectValue
 */
class FilterDirectValueString implements FilterDirectValueInterface, VisitableInterface
{
    /** @var string */
    private $value;

    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param VisitorInterface $visitor
     * @return mixed
     */
    public function accept(VisitorInterface $visitor)
    {
        return $visitor->visitFilterDirectValueString($this);
    }
}