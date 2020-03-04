<?php declare(strict_types=1);
/*
 * This file is part of the jojo1981/json-path-ast-builder package
 *
 * Copyright (c) 2020 Joost Nijhuis <jnijhuis81@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed in the root of the source code
 */
namespace Jojo1981\JsonPathAstBuilder;

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
use Antlr\Antlr4\Runtime\InputStream;
use Jojo1981\JsonPathAstBuilder\Ast\PathNodeInterface;
use Jojo1981\JsonPathAstBuilder\Parser\JsonPathLexer;
use Jojo1981\JsonPathAstBuilder\Parser\JsonPathParser;
use Jojo1981\JsonPathAstBuilder\Visitor\BuildAstVisitor;

/**
 * @package Jojo1981\JsonPathAstBuilder
 */
class AstBuilder
{
    /**
     * @param string $jsonPathExpression
     * @throws RecognitionException
     * @return PathNodeInterface[]
     */
    public function buildAst(string $jsonPathExpression): array
    {
        $inputStream = InputStream::fromString($jsonPathExpression);
        $lexer = new JsonPathLexer($inputStream);
        $tokenStream = new CommonTokenStream($lexer);
        $parser = new JsonPathParser($tokenStream);
        $cst = $parser->path();

        return $cst->accept(new BuildAstVisitor());
    }
}