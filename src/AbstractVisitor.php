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

use Jojo1981\JsonPathAstBuilder\Ast\ArrayAccessor\ArrayAll;
use Jojo1981\JsonPathAstBuilder\Ast\ArrayAccessor\ArrayRandomAccess;
use Jojo1981\JsonPathAstBuilder\Ast\ArrayAccessor\ArraySlice;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\ComparisonOperator\EqualOperator;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\ComparisonOperator\GreaterThanOperator;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\ComparisonOperator\GreaterThanOrEqualOperator;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\ComparisonOperator\LessThanOperator;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\ComparisonOperator\LessThanOrEqualOperator;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\ComparisonOperator\NotEqualOperator;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\LogicalOperator\AndOperator;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\LogicalOperator\OrOperator;
use Jojo1981\JsonPathAstBuilder\Ast\CurrentNode;
use Jojo1981\JsonPathAstBuilder\Ast\FieldAccessor\AnyChildField;
use Jojo1981\JsonPathAstBuilder\Ast\FieldAccessor\Field;
use Jojo1981\JsonPathAstBuilder\Ast\FieldAccessor\MultiField;
use Jojo1981\JsonPathAstBuilder\Ast\FieldAccessor\RecursiveAnyField;
use Jojo1981\JsonPathAstBuilder\Ast\FieldAccessor\RecursiveField;
use Jojo1981\JsonPathAstBuilder\Ast\FieldAccessor\RootNode;
use Jojo1981\JsonPathAstBuilder\Ast\FilterToken\BooleanFilter;
use Jojo1981\JsonPathAstBuilder\Ast\FilterToken\ComparisonFilter;
use Jojo1981\JsonPathAstBuilder\Ast\FilterToken\HasFilter;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\FilterDirectValue\FilterDirectValueBoolean;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\FilterDirectValue\FilterDirectValueNull;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\FilterDirectValue\FilterDirectValueNumber\FilterDirectValueFloat;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\FilterDirectValue\FilterDirectValueNumber\FilterDirectValueInteger;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\FilterDirectValue\FilterDirectValueString;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\SubQuery;
use Jojo1981\JsonPathAstBuilder\Ast\RecursiveFilterToken;

/**
 * @package Jojo1981\JsonPathAstBuilder
 */
abstract class AbstractVisitor implements VisitorInterface
{
    /**
     * @param RootNode $rootNode
     * @return mixed
     */
    public function visitRootNode(RootNode $rootNode)
    {
        return null;
    }

    /**
     * @param AnyChildField $anyChildField
     * @return mixed
     */
    public function visitAnyChildField(AnyChildField $anyChildField)
    {
        return null;
    }

    /**
     * @param Field $field
     * @return mixed
     */
    public function visitField(Field $field)
    {
        return null;
    }

    /**
     * @param MultiField $field
     * @return mixed
     */
    public function visitMultiField(MultiField $field)
    {
        return null;
    }

    /**
     * @param RecursiveAnyField $recursiveAnyField
     * @return mixed
     */
    public function visitRecursiveAnyField(RecursiveAnyField $recursiveAnyField)
    {
        return null;
    }

    /**
     * @param RecursiveField $recursiveField
     * @return mixed
     */
    public function visitRecursiveField(RecursiveField $recursiveField)
    {
        return null;
    }

    /**
     * @param ArrayAll $arrayAll
     * @return mixed
     */
    public function visitArrayAll(ArrayAll $arrayAll)
    {
        return null;
    }

    /**
     * @param ArrayRandomAccess $arrayRandomAccess
     * @return mixed
     */
    public function visitArrayRandomAccess(ArrayRandomAccess $arrayRandomAccess)
    {
        return null;
    }

    /**
     * @param ArraySlice $arraySlice
     * @return mixed
     */
    public function visitArraySlice(ArraySlice $arraySlice)
    {
        return null;
    }

    /**
     * @param CurrentNode $currentNode
     * @return mixed
     */
    public function visitCurrentNode(CurrentNode $currentNode)
    {
        return null;
    }

    /**
     * @param RecursiveFilterToken $recursiveFilterToken
     * @return mixed
     */
    public function visitRecursiveFilterToken(RecursiveFilterToken $recursiveFilterToken)
    {
        return null;
    }

    /**
     * @param SubQuery $subQuery
     * @return mixed
     */
    public function visitSubQuery(SubQuery $subQuery)
    {
        return null;
    }

    /**
     * @param FilterDirectValueString $filterDirectValueString
     * @return mixed
     */
    public function visitFilterDirectValueString(FilterDirectValueString $filterDirectValueString)
    {
        return null;
    }

    /**
     * @param FilterDirectValueNull $filterDirectValueNull
     * @return mixed
     */
    public function visitFilterDirectValueNull(FilterDirectValueNull $filterDirectValueNull)
    {
        return null;
    }

    /**
     * @param FilterDirectValueBoolean $filterDirectValueBoolean
     * @return mixed
     */
    public function visitFilterDirectValueBoolean(FilterDirectValueBoolean $filterDirectValueBoolean)
    {
        return null;
    }

    /**
     * @param FilterDirectValueInteger $filterDirectValueInteger
     * @return mixed
     */
    public function visitFilterDirectValueInteger(FilterDirectValueInteger $filterDirectValueInteger)
    {
        return null;
    }

    /**
     * @param FilterDirectValueFloat $filterDirectValueFloat
     * @return mixed
     */
    public function visitFilterDirectValueFloat(FilterDirectValueFloat $filterDirectValueFloat)
    {
        return null;
    }

    /**
     * @param BooleanFilter $booleanFilter
     * @return mixed
     */
    public function visitBooleanFilter(BooleanFilter $booleanFilter)
    {
        return null;
    }

    /**
     * @param ComparisonFilter $comparisonFilter
     * @return mixed
     */
    public function visitComparisonFilter(ComparisonFilter $comparisonFilter)
    {
        return null;
    }

    /**
     * @param HasFilter $hasFilter
     * @return mixed
     */
    public function visitHasFilter(HasFilter $hasFilter)
    {
        return null;
    }

    /**
     * @param EqualOperator $equalOperator
     * @return mixed
     */
    public function visitEqualOperator(EqualOperator $equalOperator)
    {
        return null;
    }

    /**
     * @param NotEqualOperator $notEqualOperator
     * @return mixed
     */
    public function visitNotEqualOperator(NotEqualOperator $notEqualOperator)
    {
        return null;
    }

    /**
     * @param GreaterThanOperator $greaterThanOperator
     * @return mixed
     */
    public function visitGreaterThanOperator(GreaterThanOperator $greaterThanOperator)
    {
        return null;
    }

    /**
     * @param GreaterThanOrEqualOperator $greaterThanOrEqualOperator
     * @return mixed
     */
    public function visitGreaterThanOrEqualOperator(GreaterThanOrEqualOperator $greaterThanOrEqualOperator)
    {
        return null;
    }

    /**
     * @param LessThanOperator $lessThanOperator
     * @return mixed
     */
    public function visitLessThanOperator(LessThanOperator $lessThanOperator)
    {
        return null;
    }

    /**
     * @param LessThanOrEqualOperator $lessThanOrEqualOperator
     * @return mixed
     */
    public function visitLessThanOrEqualOperator(LessThanOrEqualOperator $lessThanOrEqualOperator)
    {
        return null;
    }

    /**
     * @param AndOperator $andOperator
     * @return mixed
     */
    public function visitAndOperator(AndOperator $andOperator)
    {
        return null;
    }

    /**
     * @param OrOperator $operator
     * @return mixed
     */
    public function visitOrOperator(OrOperator $operator)
    {
        return null;
    }
}