<?php declare(strict_types=1);
/*
 * This file is part of the jojo1981/json-path-ast-builder package
 *
 * Copyright (c) 2020 Joost Nijhuis <jnijhuis81@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed in the root of the source code
 */
namespace Jojo1981\JsonPathAstBuilder\Ast\FilterValue;

use Jojo1981\JsonPathAstBuilder\Ast\FilterValueInterface;
use Jojo1981\JsonPathAstBuilder\Ast\PathNodeInterface;
use Jojo1981\JsonPathAstBuilder\VisitableInterface;
use Jojo1981\JsonPathAstBuilder\VisitorInterface;

/**
 * @package Jojo1981\JsonPathAstBuilder\Ast\FilterValue
 */
class SubQuery implements FilterValueInterface, VisitableInterface
{
    /** @var PathNodeInterface[] */
    private $path;

    /**
     * @param PathNodeInterface[] $path
     */
    public function __construct(array $path)
    {
        $this->path = $path;
    }

    /**
     * @return PathNodeInterface[]
     */
    public function getPath(): array
    {
        return $this->path;
    }

    /**
     * @param VisitorInterface $visitor
     * @return mixed
     */
    public function accept(VisitorInterface $visitor)
    {
        return $visitor->visitSubQuery($this);
    }
}