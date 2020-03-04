<?php declare(strict_types=1);
/*
 * This file is part of the jojo1981/json-path-ast-builder package
 *
 * Copyright (c) 2020 Joost Nijhuis <jnijhuis81@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed in the root of the source code
 */
namespace Jojo1981\JsonPathAstBuilder\Visitor;

use Antlr\Antlr4\Runtime\Tree\AbstractParseTreeVisitor;
use Jojo1981\JsonPathAstBuilder\Ast\ArrayAccessor\ArrayAll;
use Jojo1981\JsonPathAstBuilder\Ast\ArrayAccessor\ArrayRandomAccess;
use Jojo1981\JsonPathAstBuilder\Ast\ArrayAccessor\ArraySlice;
use Jojo1981\JsonPathAstBuilder\Ast\ArrayAccessorInterface;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\ComparisonOperator\EqualOperator;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\ComparisonOperator\GreaterThanOperator;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\ComparisonOperator\GreaterThanOrEqualOperator;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\ComparisonOperator\LessThanOperator;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\ComparisonOperator\LessThanOrEqualOperator;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\ComparisonOperator\NotEqualOperator;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\ComparisonOperatorInterface;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\LogicalOperator\AndOperator;
use Jojo1981\JsonPathAstBuilder\Ast\BinaryOperator\LogicalOperator\OrOperator;
use Jojo1981\JsonPathAstBuilder\Ast\CurrentNode;
use Jojo1981\JsonPathAstBuilder\Ast\FieldAccessor\AnyChildField;
use Jojo1981\JsonPathAstBuilder\Ast\FieldAccessor\Field;
use Jojo1981\JsonPathAstBuilder\Ast\FieldAccessor\MultiField;
use Jojo1981\JsonPathAstBuilder\Ast\FieldAccessor\RecursiveAnyField;
use Jojo1981\JsonPathAstBuilder\Ast\FieldAccessor\RecursiveField;
use Jojo1981\JsonPathAstBuilder\Ast\FieldAccessor\RootNode;
use Jojo1981\JsonPathAstBuilder\Ast\FieldAccessorInterface;
use Jojo1981\JsonPathAstBuilder\Ast\FilterToken\BooleanFilter;
use Jojo1981\JsonPathAstBuilder\Ast\FilterToken\ComparisonFilter;
use Jojo1981\JsonPathAstBuilder\Ast\FilterToken\HasFilter;
use Jojo1981\JsonPathAstBuilder\Ast\FilterNodeInterface;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\FilterDirectValue\FilterDirectValueBoolean;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\FilterDirectValue\FilterDirectValueNull;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\FilterDirectValue\FilterDirectValueNumber\FilterDirectValueFloat;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\FilterDirectValue\FilterDirectValueNumber\FilterDirectValueInteger;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\FilterDirectValue\FilterDirectValueString;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\FilterDirectValueInterface;
use Jojo1981\JsonPathAstBuilder\Ast\FilterValue\SubQuery;
use Jojo1981\JsonPathAstBuilder\Ast\PathNodeInterface;
use Jojo1981\JsonPathAstBuilder\Ast\RecursiveFilterToken;
use Jojo1981\JsonPathAstBuilder\Parser\Context\AndExpressionContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\AndOperatorContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\AnyChildContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\ArrayAccessorContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\ArrayAllContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\ArrayRandomAccessContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\ArraySliceContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\BooleanExpressionContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\BooleanValueContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\ChildAccessContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\ComparisonOperatorContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\CurrentContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\DotFieldContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\EqualOperatorContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\Expression1Context;
use Jojo1981\JsonPathAstBuilder\Parser\Context\Expression2Context;
use Jojo1981\JsonPathAstBuilder\Parser\Context\ExpressionContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\FieldAccessorContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\FloatContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\GreaterOperatorContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\GreaterOrEqualOperatorContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\IdentifierContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\IntegerContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\LessOperatorContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\LessOrEqualOperatorContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\NotEqualOperatorContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\NullValueContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\NumberValueContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\OrExpressionContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\OrOperatorContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\PathContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\PathSequenceContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\RecursiveAnyContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\RecursiveFieldContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\RecursiveSubscriptFilterContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\RootContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\SignedIntegerContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\StringContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\StringValueContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\SubQueryContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\SubscriptFieldContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\SubscriptFilterContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\UnsignedIntegerContext;
use Jojo1981\JsonPathAstBuilder\Parser\Context\ValueContext;
use Jojo1981\JsonPathAstBuilder\Parser\JsonPathVisitor;
use LogicException;
use function array_push;
use function array_values;
use function substr;

/**
 * @package Jojo1981\JsonPathAstBuilder\Visitor
 */
class BuildAstVisitor extends AbstractParseTreeVisitor implements JsonPathVisitor
{
    /**
     * @param PathContext $context
     * @return PathNodeInterface[]
     */
    public function visitPath(PathContext $context): array
    {
        $result = [];
        if (null !== $root = $context->root()) {
            $result[] = $root->accept($this);
        }

        if (null !== $pathSequence = $context->pathSequence()) {
            array_push($result, ...array_values($pathSequence->accept($this)));
        }

        return $result;
    }

    /**
     * @param RootContext $context
     * @return RootNode
     */
    public function visitRoot(RootContext $context): RootNode
    {
        return new RootNode();
    }

    /**
     * @param CurrentContext $context
     * @return CurrentNode
     */
    public function visitCurrent(CurrentContext $context): CurrentNode
    {
        return new CurrentNode();
    }

    /**
     * @param PathSequenceContext $context
     * @return PathNodeInterface[]
     */
    public function visitPathSequence(PathSequenceContext $context): array
    {
        $result = [];

        $numberOfChildren = $context->getChildCount();
        for ($index = 0; $index < $numberOfChildren; $index++) {
            if (!$this->shouldVisitNextChild($context, $result)) {
                break;
            }

            if (null !== $child = $context->getChild($index)) {
                $result[] = $child->accept($this);
            }
        }

        return $result;
    }

    /**
     * @param ChildAccessContext $context
     * @return null|PathNodeInterface
     */
    public function visitChildAccess(ChildAccessContext $context): ?PathNodeInterface
    {
        if (null !== $parserRuleContext = $context->fieldAccessor() ?? $context->arrayAccessor()) {
            return $parserRuleContext->accept($this);
        }

        return null;
    }

    /**
     * @param FieldAccessorContext $context
     * @return null|FieldAccessorInterface
     */
    public function visitFieldAccessor(FieldAccessorContext $context): ?FieldAccessorInterface
    {
        $parserRuleContext = $context->dotField() ?? $context->recursiveSubscriptFilter() ?? $context->recursiveAny()
            ?? $context->recursiveField() ?? $context->anyChild() ?? $context->subscriptField();
        if (null !== $parserRuleContext) {
            return $parserRuleContext->accept($this);
        }

        return null;
    }

    /**
     * @param DotFieldContext $context
     * @return null|Field
     */
    public function visitDotField(DotFieldContext $context): ?Field
    {
        if (null !== $identifier = $context->identifier()) {
            return new Field($identifier->accept($this));
        }

        return null;
    }

    /**
     * @param RecursiveSubscriptFilterContext $context
     * @return null|RecursiveFilterToken
     */
    public function visitRecursiveSubscriptFilter(RecursiveSubscriptFilterContext $context): ?RecursiveFilterToken
    {
        if (null !== $subscriptFilterContext = $context->subscriptFilter()) {
            return new RecursiveFilterToken($subscriptFilterContext->accept($this));
        }

        return null;
    }

    /**
     * @param RecursiveAnyContext $context
     * @return RecursiveAnyField
     */
    public function visitRecursiveAny(RecursiveAnyContext $context): RecursiveAnyField
    {
        return new RecursiveAnyField();
    }

    /**
     * @param RecursiveFieldContext $context
     * @return null|RecursiveField
     */
    public function visitRecursiveField(RecursiveFieldContext $context): ?RecursiveField
    {
        if (null !== $identifierContext = $context->identifier()) {
            return new RecursiveField($identifierContext->accept($this));
        }

        return null;
    }

    /**
     * @param AnyChildContext $context
     * @return AnyChildField
     */
    public function visitAnyChild(AnyChildContext $context): AnyChildField
    {
        return new AnyChildField();
    }

    /**
     * @param SubscriptFieldContext $context
     * @return MultiField
     */
    public function visitSubscriptField(SubscriptFieldContext $context): MultiField
    {
        /** @var string[] $names */
        $names = [];

        /** @var StringContext $stringContext */
        foreach ($context->string() as $stringContext) {
            $names[] = $stringContext->accept($this);
        }

        return new MultiField($names);
    }

    /**
     * @param ArrayAccessorContext $context
     * @return null|ArrayAccessorInterface
     */
    public function visitArrayAccessor(ArrayAccessorContext $context): ?ArrayAccessorInterface
    {
        if (null !== $parserRuleContext = $context->arrayAll() ?? $context->arraySlice() ?? $context->arrayRandomAccess()) {
            return $parserRuleContext->accept($this);
        }

        return null;
    }

    /**
     * @param ArrayAllContext $context
     * @return ArrayAll
     */
    public function visitArrayAll(ArrayAllContext $context): ArrayAll
    {
        return new ArrayAll();
    }

    /**
     * @param ArraySliceContext $context
     * @throws LogicException
     * @return ArraySlice
     */
    public function visitArraySlice(ArraySliceContext $context): ArraySlice
    {
        $start = null;
        $stop = null;
        $step = 1;

        if (null !== $integerContext = $context->integer(0)) {
            $start = $integerContext->accept($this);
        }

        if (null !== $integerContext = $context->integer(1)) {
            $stop = $integerContext->accept($this);
        }

        if (null !== $unsignedIntegerContext = $context->unsignedInteger()) {
            $step = $unsignedIntegerContext->accept($this);
            if (0 === $step) {
                throw new LogicException('step size can not be 0');
            }
        }

        return new ArraySlice($start, $stop, $step);
    }

    /**
     * @param ArrayRandomAccessContext $context
     * @return ArrayRandomAccess
     */
    public function visitArrayRandomAccess(ArrayRandomAccessContext $context): ArrayRandomAccess
    {
        $indexes = [];
        /** @var UnsignedIntegerContext $unsignedIntegerContext */
        foreach ($context->unsignedInteger() ?? [] as $unsignedIntegerContext) {
            $indexes[] = $unsignedIntegerContext->accept($this);
        }

        return new ArrayRandomAccess($indexes);
    }

    /**
     * @param SubscriptFilterContext $context
     * @return null|FilterNodeInterface
     */
    public function visitSubscriptFilter(SubscriptFilterContext $context): ?FilterNodeInterface
    {
        if (null !== $parserRuleContext = $context->booleanExpression()) {
            return $parserRuleContext->accept($this);
        }

        return null;
    }

    /**
     * @param BooleanExpressionContext $context
     * @return null|FilterNodeInterface
     */
    public function visitBooleanExpression(BooleanExpressionContext $context): ?FilterNodeInterface
    {
        $parserRuleContext = $context->andExpression() ?? $context->orExpression() ?? $context->expression();
        if (null !== $parserRuleContext) {
            return $parserRuleContext->accept($this);
        }

        return null;
    }

    /**
     * @param AndExpressionContext $context
     * @return null|FilterNodeInterface
     */
    public function visitAndExpression(AndExpressionContext $context): ?FilterNodeInterface
    {
        if (null !== $expressionContext = $context->expression()) {
            return $expressionContext->accept($this);
        }

        if (null !== ($lhAndExpressionContext = $context->andExpression(0))
            && null !== ($rhsAndExpressionContext = $context->andExpression(1))
            & null !== ($andOperatorContext = $context->andOperator())
        ) {
            return new BooleanFilter(
                $andOperatorContext->accept($this),
                $lhAndExpressionContext->accept($this),
                $rhsAndExpressionContext->accept($this)
            );
        }

        return null;
    }

    /**
     * @param OrExpressionContext $context
     * @return null|FilterNodeInterface
     */
    public function visitOrExpression(OrExpressionContext $context): ?FilterNodeInterface
    {
        if (null !== $expressionContext = $context->expression()) {
            return $expressionContext->accept($this);
        }

        if (null !== ($lhOrExpressionContext = $context->orExpression(0))
            && null !== ($rhsOrExpressionContext = $context->orExpression(1))
            & null !== ($orOperatorContext = $context->orOperator())
        ) {
            return new BooleanFilter(
                $orOperatorContext->accept($this),
                $lhOrExpressionContext->accept($this),
                $rhsOrExpressionContext->accept($this)
            );
        }

        return null;
    }

    /**
     * @param ExpressionContext $context
     * @return null|FilterNodeInterface
     */
    public function visitExpression(ExpressionContext $context): ?FilterNodeInterface
    {
        if (null !== $parserRuleContext = $context->expression1() ?? $context->expression2()) {
            return $parserRuleContext->accept($this);
        }

        return null;
    }

    /**
     * @param Expression1Context $context
     * @return null|FilterNodeInterface
     */
    public function visitExpression1(Expression1Context $context): ?FilterNodeInterface
    {
        if (null !== ($subQueryContext = $context->subQuery(0)) && null === $context->comparisonOperator()) {
            return new HasFilter($subQueryContext->accept($this));
        }

        if (null !== ($lhs = $context->subQuery(0))
            && null !== ($op = $context->comparisonOperator())
            && null !== ($rhs = $context->value() ?? $context->subQuery(1))
        ) {
            return new ComparisonFilter($op->accept($this), $lhs->accept($this), $rhs->accept($this));
        }

        return null;
    }

    /**
     * @param Expression2Context $context
     * @return null|FilterNodeInterface
     */
    public function visitExpression2(Expression2Context $context): ?FilterNodeInterface
    {
        if (null !== ($lhs = $context->value())
            && null !== ($rhs = $context->subQuery())
            && null !== $op = $context->comparisonOperator()
        ) {
            return new ComparisonFilter($op->accept($this), $lhs->accept($this), $rhs->accept($this));
        }

        return null;
    }

    /**
     * @param SubQueryContext $context
     * @return SubQuery
     */
    public function visitSubQuery(SubQueryContext $context): SubQuery
    {
        $result = [];
        if (null !== $parserRuleContext = $context->current() ?? $context->root()) {
            $result[] = $parserRuleContext->accept($this);
        }

        if (null !== $pathSequence = $context->pathSequence()) {
            array_push($result, ...array_values($pathSequence->accept($this)));
        }

        return new SubQuery($result);
    }

    /**
     * @param ValueContext $context
     * @return null|FilterDirectValueInterface
     */
    public function visitValue(ValueContext $context): ?FilterDirectValueInterface
    {
        $parserRuleContext = $context->booleanValue() ?? $context->numberValue() ?? $context->nullValue()
            ?? $context->stringValue();

        if ($parserRuleContext) {
            return $parserRuleContext->accept($this);
        }

        return null;
    }

    /**
     * @param BooleanValueContext $context
     * @return FilterDirectValueBoolean
     */
    public function visitBooleanValue(BooleanValueContext $context): FilterDirectValueBoolean
    {
        return new FilterDirectValueBoolean(null !== $context->KEYWORD_TRUE());
    }

    /**
     * @param NumberValueContext $context
     * @return null|FilterDirectValueFloat
     */
    public function visitNumberValue(NumberValueContext $context): ?FilterDirectValueInterface
    {
        if (null !== $floatContext = $context->float()) {
            return new FilterDirectValueFloat($floatContext->accept($this));
        }
        if (null !== $integerContext = $context->integer()) {
            return new FilterDirectValueInteger($integerContext->accept($this));
        }

        return null;
    }

    /**
     * @param NullValueContext $context
     * @return FilterDirectValueNull
     */
    public function visitNullValue(NullValueContext $context): FilterDirectValueNull
    {
        return new FilterDirectValueNull();
    }

    /**
     * @param StringValueContext $context
     * @return null|FilterDirectValueString
     */
    public function visitStringValue(StringValueContext $context): ?FilterDirectValueString
    {
        if (null !== $stringContext = $context->string()) {
            return new FilterDirectValueString($stringContext->accept($this));
        }

        return null;
    }

    /**
     * @param AndOperatorContext $context
     * @return AndOperator
     */
    public function visitAndOperator(AndOperatorContext $context): AndOperator
    {
        return new AndOperator();
    }

    /**
     * @param OrOperatorContext $context
     * @return OrOperator
     */
    public function visitOrOperator(OrOperatorContext $context): OrOperator
    {
        return new OrOperator();
    }

    /**
     * @param ComparisonOperatorContext $context
     * @return null|ComparisonOperatorInterface
     */
    public function visitComparisonOperator(ComparisonOperatorContext $context): ?ComparisonOperatorInterface
    {
        $parserRuleContext= $context->equalOperator() ?? $context->notEqualOperator() ?? $context->greaterOperator()
            ?? $context->greaterOrEqualOperator() ?? $context->lessOperator() ?? $context->lessOrEqualOperator();

        if (null !== $parserRuleContext) {
            return $parserRuleContext->accept($this);
        }

        return null;
    }

    /**
     * @param EqualOperatorContext $context
     * @return EqualOperator
     */
    public function visitEqualOperator(EqualOperatorContext $context): EqualOperator
    {
        return new EqualOperator();
    }

    /**
     * @param NotEqualOperatorContext $context
     * @return NotEqualOperator
     */
    public function visitNotEqualOperator(NotEqualOperatorContext $context): NotEqualOperator
    {
        return new NotEqualOperator();
    }

    /**
     * @param GreaterOrEqualOperatorContext $context
     * @return GreaterThanOrEqualOperator
     */
    public function visitGreaterOrEqualOperator(GreaterOrEqualOperatorContext $context): GreaterThanOrEqualOperator
    {
        return new GreaterThanOrEqualOperator();
    }

    /**
     * @param GreaterOperatorContext $context
     * @return GreaterThanOperator
     */
    public function visitGreaterOperator(GreaterOperatorContext $context): GreaterThanOperator
    {
        return new GreaterThanOperator();
    }

    /**
     * @param LessOrEqualOperatorContext $context
     * @return LessThanOrEqualOperator
     */
    public function visitLessOrEqualOperator(LessOrEqualOperatorContext $context): LessThanOrEqualOperator
    {
        return new LessThanOrEqualOperator();
    }

    /**
     * @param LessOperatorContext $context
     * @return LessThanOperator
     */
    public function visitLessOperator(LessOperatorContext $context): LessThanOperator
    {
        return new LessThanOperator();
    }

    /**
     * @param StringContext $context
     * @return null|string
     */
    public function visitString(StringContext $context): ?string
    {
        $token = $context->DOUBLE_QUOTED_STRING() ?? $context->SINGLE_QUOTED_STRING();
        if (null !== $token && null !== $text = $token->getText()) {
            return substr($text, 1, -1);
        }

        return null;
    }

    /**
     * @param IntegerContext $context
     * @return null|int
     */
    public function visitInteger(IntegerContext $context): ?int
    {
        if (null !== $parserRuleContext = $context->unsignedInteger() ?? $context->signedInteger()) {
            return $parserRuleContext->accept($this);
        }

        return null;
    }

    /**
     * @param UnsignedIntegerContext $context
     * @return int
     */
    public function visitUnsignedInteger(UnsignedIntegerContext $context): int
    {
        return (int) $context->getText();
    }

    /**
     * @param SignedIntegerContext $context
     * @return int
     */
    public function visitSignedInteger(SignedIntegerContext $context): int
    {
        return (int) $context->getText();
    }

    /**
     * @param FloatContext $context
     * @return float
     */
    public function visitFloat(FloatContext $context): float
    {
        return (float) $context->getText();
    }

    /**
     * @param IdentifierContext $context
     * @return string
     */
    public function visitIdentifier(IdentifierContext $context): string
    {
        return null !== $context->IDENTIFIER() ?  $context->IDENTIFIER()->getText() : '';
    }
}