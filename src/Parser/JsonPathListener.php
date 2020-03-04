<?php

/*
 * Generated from ./resources/JsonPath.g4 by ANTLR 4.7.2
 */

namespace Jojo1981\JsonPathAstBuilder\Parser;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see JsonPathParser}.
 */
interface JsonPathListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::path()}.
	 * @param $context The parse tree.
	 */
	public function enterPath(Context\PathContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::path()}.
	 * @param $context The parse tree.
	 */
	public function exitPath(Context\PathContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::root()}.
	 * @param $context The parse tree.
	 */
	public function enterRoot(Context\RootContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::root()}.
	 * @param $context The parse tree.
	 */
	public function exitRoot(Context\RootContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::pathSequence()}.
	 * @param $context The parse tree.
	 */
	public function enterPathSequence(Context\PathSequenceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::pathSequence()}.
	 * @param $context The parse tree.
	 */
	public function exitPathSequence(Context\PathSequenceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::subscriptFilter()}.
	 * @param $context The parse tree.
	 */
	public function enterSubscriptFilter(Context\SubscriptFilterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::subscriptFilter()}.
	 * @param $context The parse tree.
	 */
	public function exitSubscriptFilter(Context\SubscriptFilterContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::childAccess()}.
	 * @param $context The parse tree.
	 */
	public function enterChildAccess(Context\ChildAccessContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::childAccess()}.
	 * @param $context The parse tree.
	 */
	public function exitChildAccess(Context\ChildAccessContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::fieldAccessor()}.
	 * @param $context The parse tree.
	 */
	public function enterFieldAccessor(Context\FieldAccessorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::fieldAccessor()}.
	 * @param $context The parse tree.
	 */
	public function exitFieldAccessor(Context\FieldAccessorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::dotField()}.
	 * @param $context The parse tree.
	 */
	public function enterDotField(Context\DotFieldContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::dotField()}.
	 * @param $context The parse tree.
	 */
	public function exitDotField(Context\DotFieldContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::recursiveSubscriptFilter()}.
	 * @param $context The parse tree.
	 */
	public function enterRecursiveSubscriptFilter(Context\RecursiveSubscriptFilterContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::recursiveSubscriptFilter()}.
	 * @param $context The parse tree.
	 */
	public function exitRecursiveSubscriptFilter(Context\RecursiveSubscriptFilterContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::recursiveAny()}.
	 * @param $context The parse tree.
	 */
	public function enterRecursiveAny(Context\RecursiveAnyContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::recursiveAny()}.
	 * @param $context The parse tree.
	 */
	public function exitRecursiveAny(Context\RecursiveAnyContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::recursiveField()}.
	 * @param $context The parse tree.
	 */
	public function enterRecursiveField(Context\RecursiveFieldContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::recursiveField()}.
	 * @param $context The parse tree.
	 */
	public function exitRecursiveField(Context\RecursiveFieldContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::anyChild()}.
	 * @param $context The parse tree.
	 */
	public function enterAnyChild(Context\AnyChildContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::anyChild()}.
	 * @param $context The parse tree.
	 */
	public function exitAnyChild(Context\AnyChildContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::subscriptField()}.
	 * @param $context The parse tree.
	 */
	public function enterSubscriptField(Context\SubscriptFieldContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::subscriptField()}.
	 * @param $context The parse tree.
	 */
	public function exitSubscriptField(Context\SubscriptFieldContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::arrayAccessor()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayAccessor(Context\ArrayAccessorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::arrayAccessor()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayAccessor(Context\ArrayAccessorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::arrayAll()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayAll(Context\ArrayAllContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::arrayAll()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayAll(Context\ArrayAllContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::arraySlice()}.
	 * @param $context The parse tree.
	 */
	public function enterArraySlice(Context\ArraySliceContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::arraySlice()}.
	 * @param $context The parse tree.
	 */
	public function exitArraySlice(Context\ArraySliceContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::arrayRandomAccess()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayRandomAccess(Context\ArrayRandomAccessContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::arrayRandomAccess()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayRandomAccess(Context\ArrayRandomAccessContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::booleanExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterBooleanExpression(Context\BooleanExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::booleanExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitBooleanExpression(Context\BooleanExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::andExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterAndExpression(Context\AndExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::andExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitAndExpression(Context\AndExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::orExpression()}.
	 * @param $context The parse tree.
	 */
	public function enterOrExpression(Context\OrExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::orExpression()}.
	 * @param $context The parse tree.
	 */
	public function exitOrExpression(Context\OrExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterExpression(Context\ExpressionContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitExpression(Context\ExpressionContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::expression1()}.
	 * @param $context The parse tree.
	 */
	public function enterExpression1(Context\Expression1Context $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::expression1()}.
	 * @param $context The parse tree.
	 */
	public function exitExpression1(Context\Expression1Context $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::expression2()}.
	 * @param $context The parse tree.
	 */
	public function enterExpression2(Context\Expression2Context $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::expression2()}.
	 * @param $context The parse tree.
	 */
	public function exitExpression2(Context\Expression2Context $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::subQuery()}.
	 * @param $context The parse tree.
	 */
	public function enterSubQuery(Context\SubQueryContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::subQuery()}.
	 * @param $context The parse tree.
	 */
	public function exitSubQuery(Context\SubQueryContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::current()}.
	 * @param $context The parse tree.
	 */
	public function enterCurrent(Context\CurrentContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::current()}.
	 * @param $context The parse tree.
	 */
	public function exitCurrent(Context\CurrentContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::value()}.
	 * @param $context The parse tree.
	 */
	public function enterValue(Context\ValueContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::value()}.
	 * @param $context The parse tree.
	 */
	public function exitValue(Context\ValueContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::stringValue()}.
	 * @param $context The parse tree.
	 */
	public function enterStringValue(Context\StringValueContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::stringValue()}.
	 * @param $context The parse tree.
	 */
	public function exitStringValue(Context\StringValueContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::numberValue()}.
	 * @param $context The parse tree.
	 */
	public function enterNumberValue(Context\NumberValueContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::numberValue()}.
	 * @param $context The parse tree.
	 */
	public function exitNumberValue(Context\NumberValueContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::booleanValue()}.
	 * @param $context The parse tree.
	 */
	public function enterBooleanValue(Context\BooleanValueContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::booleanValue()}.
	 * @param $context The parse tree.
	 */
	public function exitBooleanValue(Context\BooleanValueContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::nullValue()}.
	 * @param $context The parse tree.
	 */
	public function enterNullValue(Context\NullValueContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::nullValue()}.
	 * @param $context The parse tree.
	 */
	public function exitNullValue(Context\NullValueContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::andOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterAndOperator(Context\AndOperatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::andOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitAndOperator(Context\AndOperatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::orOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterOrOperator(Context\OrOperatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::orOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitOrOperator(Context\OrOperatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::comparisonOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterComparisonOperator(Context\ComparisonOperatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::comparisonOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitComparisonOperator(Context\ComparisonOperatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::equalOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterEqualOperator(Context\EqualOperatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::equalOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitEqualOperator(Context\EqualOperatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::notEqualOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterNotEqualOperator(Context\NotEqualOperatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::notEqualOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitNotEqualOperator(Context\NotEqualOperatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::greaterOrEqualOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterGreaterOrEqualOperator(Context\GreaterOrEqualOperatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::greaterOrEqualOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitGreaterOrEqualOperator(Context\GreaterOrEqualOperatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::greaterOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterGreaterOperator(Context\GreaterOperatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::greaterOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitGreaterOperator(Context\GreaterOperatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::lessOrEqualOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterLessOrEqualOperator(Context\LessOrEqualOperatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::lessOrEqualOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitLessOrEqualOperator(Context\LessOrEqualOperatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::lessOperator()}.
	 * @param $context The parse tree.
	 */
	public function enterLessOperator(Context\LessOperatorContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::lessOperator()}.
	 * @param $context The parse tree.
	 */
	public function exitLessOperator(Context\LessOperatorContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::identifier()}.
	 * @param $context The parse tree.
	 */
	public function enterIdentifier(Context\IdentifierContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::identifier()}.
	 * @param $context The parse tree.
	 */
	public function exitIdentifier(Context\IdentifierContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::unsignedInteger()}.
	 * @param $context The parse tree.
	 */
	public function enterUnsignedInteger(Context\UnsignedIntegerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::unsignedInteger()}.
	 * @param $context The parse tree.
	 */
	public function exitUnsignedInteger(Context\UnsignedIntegerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::signedInteger()}.
	 * @param $context The parse tree.
	 */
	public function enterSignedInteger(Context\SignedIntegerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::signedInteger()}.
	 * @param $context The parse tree.
	 */
	public function exitSignedInteger(Context\SignedIntegerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::integer()}.
	 * @param $context The parse tree.
	 */
	public function enterInteger(Context\IntegerContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::integer()}.
	 * @param $context The parse tree.
	 */
	public function exitInteger(Context\IntegerContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::float()}.
	 * @param $context The parse tree.
	 */
	public function enterFloat(Context\FloatContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::float()}.
	 * @param $context The parse tree.
	 */
	public function exitFloat(Context\FloatContext $context) : void;
	/**
	 * Enter a parse tree produced by {@see JsonPathParser::string()}.
	 * @param $context The parse tree.
	 */
	public function enterString(Context\StringContext $context) : void;
	/**
	 * Exit a parse tree produced by {@see JsonPathParser::string()}.
	 * @param $context The parse tree.
	 */
	public function exitString(Context\StringContext $context) : void;
}