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
interface VisitorInterface
{
    /**
     * @param RootNode $rootNode
     * @return mixed
     */
    public function visitRootNode(RootNode $rootNode): mixed;

    /**
     * @param AnyChildField $anyChildField
     * @return mixed
     */
    public function visitAnyChildField(AnyChildField $anyChildField): mixed;

    /**
     * @param Field $field
     * @return mixed
     */
    public function visitField(Field $field): mixed;

    /**
     * @param MultiField $field
     * @return mixed
     */
    public function visitMultiField(MultiField $field): mixed;

    /**
     * @param RecursiveAnyField $recursiveAnyField
     * @return mixed
     */
    public function visitRecursiveAnyField(RecursiveAnyField $recursiveAnyField): mixed;

    /**
     * @param RecursiveField $recursiveField
     * @return mixed
     */
    public function visitRecursiveField(RecursiveField $recursiveField): mixed;

    /**
     * @param ArrayAll $arrayAll
     * @return mixed
     */
    public function visitArrayAll(ArrayAll $arrayAll): mixed;

    /**
     * @param ArrayRandomAccess $arrayRandomAccess
     * @return mixed
     */
    public function visitArrayRandomAccess(ArrayRandomAccess $arrayRandomAccess): mixed;

    /**
     * @param ArraySlice $arraySlice
     * @return mixed
     */
    public function visitArraySlice(ArraySlice $arraySlice): mixed;

    /**
     * @param CurrentNode $currentNode
     * @return mixed
     */
    public function visitCurrentNode(CurrentNode $currentNode): mixed;

    /**
     * @param RecursiveFilterToken $recursiveFilterToken
     * @return mixed
     */
    public function visitRecursiveFilterToken(RecursiveFilterToken $recursiveFilterToken): mixed;

    /**
     * @param SubQuery $subQuery
     * @return mixed
     */
    public function visitSubQuery(SubQuery $subQuery): mixed;

    /**
     * @param FilterDirectValueString $filterDirectValueString
     * @return mixed
     */
    public function visitFilterDirectValueString(FilterDirectValueString $filterDirectValueString): mixed;

    /**
     * @param FilterDirectValueNull $filterDirectValueNull
     * @return mixed
     */
    public function visitFilterDirectValueNull(FilterDirectValueNull $filterDirectValueNull): mixed;

    /**
     * @param FilterDirectValueBoolean $filterDirectValueBoolean
     * @return mixed
     */
    public function visitFilterDirectValueBoolean(FilterDirectValueBoolean $filterDirectValueBoolean): mixed;

    /**
     * @param FilterDirectValueInteger $filterDirectValueInteger
     * @return mixed
     */
    public function visitFilterDirectValueInteger(FilterDirectValueInteger $filterDirectValueInteger): mixed;

    /**
     * @param FilterDirectValueFloat $filterDirectValueFloat
     * @return mixed
     */
    public function visitFilterDirectValueFloat(FilterDirectValueFloat $filterDirectValueFloat): mixed;

    /**
     * @param BooleanFilter $booleanFilter
     * @return mixed
     */
    public function visitBooleanFilter(BooleanFilter $booleanFilter): mixed;

    /**
     * @param ComparisonFilter $comparisonFilter
     * @return mixed
     */
    public function visitComparisonFilter(ComparisonFilter $comparisonFilter): mixed;

    /**
     * @param HasFilter $hasFilter
     * @return mixed
     */
    public function visitHasFilter(HasFilter $hasFilter): mixed;

    /**
     * @param EqualOperator $equalOperator
     * @return mixed
     */
    public function visitEqualOperator(EqualOperator $equalOperator): mixed;

    /**
     * @param NotEqualOperator $notEqualOperator
     * @return mixed
     */
    public function visitNotEqualOperator(NotEqualOperator $notEqualOperator): mixed;

    /**
     * @param GreaterThanOperator $greaterThanOperator
     * @return mixed
     */
    public function visitGreaterThanOperator(GreaterThanOperator $greaterThanOperator): mixed;

    /**
     * @param GreaterThanOrEqualOperator $greaterThanOrEqualOperator
     * @return mixed
     */
    public function visitGreaterThanOrEqualOperator(GreaterThanOrEqualOperator $greaterThanOrEqualOperator): mixed;

    /**
     * @param LessThanOperator $lessThanOperator
     * @return mixed
     */
    public function visitLessThanOperator(LessThanOperator $lessThanOperator): mixed;

    /**
     * @param LessThanOrEqualOperator $lessThanOrEqualOperator
     * @return mixed
     */
    public function visitLessThanOrEqualOperator(LessThanOrEqualOperator $lessThanOrEqualOperator): mixed;

    /**
     * @param AndOperator $andOperator
     * @return mixed
     */
    public function visitAndOperator(AndOperator $andOperator): mixed;

    /**
     * @param OrOperator $operator
     * @return mixed
     */
    public function visitOrOperator(OrOperator $operator): mixed;
}
