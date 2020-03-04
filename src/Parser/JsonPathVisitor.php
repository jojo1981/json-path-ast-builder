<?php

/*
 * Generated from ./resources/JsonPath.g4 by ANTLR 4.7.2
 */

namespace Jojo1981\JsonPathAstBuilder\Parser;

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see JsonPathParser}.
 */
interface JsonPathVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see JsonPathParser::path()}.
	 *
	 * @param Context\PathContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPath(Context\PathContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::root()}.
	 *
	 * @param Context\RootContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRoot(Context\RootContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::pathSequence()}.
	 *
	 * @param Context\PathSequenceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPathSequence(Context\PathSequenceContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::subscriptFilter()}.
	 *
	 * @param Context\SubscriptFilterContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubscriptFilter(Context\SubscriptFilterContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::childAccess()}.
	 *
	 * @param Context\ChildAccessContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitChildAccess(Context\ChildAccessContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::fieldAccessor()}.
	 *
	 * @param Context\FieldAccessorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFieldAccessor(Context\FieldAccessorContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::dotField()}.
	 *
	 * @param Context\DotFieldContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDotField(Context\DotFieldContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::recursiveSubscriptFilter()}.
	 *
	 * @param Context\RecursiveSubscriptFilterContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRecursiveSubscriptFilter(Context\RecursiveSubscriptFilterContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::recursiveAny()}.
	 *
	 * @param Context\RecursiveAnyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRecursiveAny(Context\RecursiveAnyContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::recursiveField()}.
	 *
	 * @param Context\RecursiveFieldContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRecursiveField(Context\RecursiveFieldContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::anyChild()}.
	 *
	 * @param Context\AnyChildContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAnyChild(Context\AnyChildContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::subscriptField()}.
	 *
	 * @param Context\SubscriptFieldContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubscriptField(Context\SubscriptFieldContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::arrayAccessor()}.
	 *
	 * @param Context\ArrayAccessorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayAccessor(Context\ArrayAccessorContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::arrayAll()}.
	 *
	 * @param Context\ArrayAllContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayAll(Context\ArrayAllContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::arraySlice()}.
	 *
	 * @param Context\ArraySliceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArraySlice(Context\ArraySliceContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::arrayRandomAccess()}.
	 *
	 * @param Context\ArrayRandomAccessContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArrayRandomAccess(Context\ArrayRandomAccessContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::booleanExpression()}.
	 *
	 * @param Context\BooleanExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBooleanExpression(Context\BooleanExpressionContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::andExpression()}.
	 *
	 * @param Context\AndExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAndExpression(Context\AndExpressionContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::orExpression()}.
	 *
	 * @param Context\OrExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOrExpression(Context\OrExpressionContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::expression()}.
	 *
	 * @param Context\ExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpression(Context\ExpressionContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::expression1()}.
	 *
	 * @param Context\Expression1Context $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpression1(Context\Expression1Context $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::expression2()}.
	 *
	 * @param Context\Expression2Context $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpression2(Context\Expression2Context $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::subQuery()}.
	 *
	 * @param Context\SubQueryContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSubQuery(Context\SubQueryContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::current()}.
	 *
	 * @param Context\CurrentContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCurrent(Context\CurrentContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::value()}.
	 *
	 * @param Context\ValueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValue(Context\ValueContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::stringValue()}.
	 *
	 * @param Context\StringValueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitStringValue(Context\StringValueContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::numberValue()}.
	 *
	 * @param Context\NumberValueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNumberValue(Context\NumberValueContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::booleanValue()}.
	 *
	 * @param Context\BooleanValueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBooleanValue(Context\BooleanValueContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::nullValue()}.
	 *
	 * @param Context\NullValueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNullValue(Context\NullValueContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::andOperator()}.
	 *
	 * @param Context\AndOperatorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAndOperator(Context\AndOperatorContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::orOperator()}.
	 *
	 * @param Context\OrOperatorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOrOperator(Context\OrOperatorContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::comparisonOperator()}.
	 *
	 * @param Context\ComparisonOperatorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitComparisonOperator(Context\ComparisonOperatorContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::equalOperator()}.
	 *
	 * @param Context\EqualOperatorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEqualOperator(Context\EqualOperatorContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::notEqualOperator()}.
	 *
	 * @param Context\NotEqualOperatorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNotEqualOperator(Context\NotEqualOperatorContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::greaterOrEqualOperator()}.
	 *
	 * @param Context\GreaterOrEqualOperatorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGreaterOrEqualOperator(Context\GreaterOrEqualOperatorContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::greaterOperator()}.
	 *
	 * @param Context\GreaterOperatorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGreaterOperator(Context\GreaterOperatorContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::lessOrEqualOperator()}.
	 *
	 * @param Context\LessOrEqualOperatorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLessOrEqualOperator(Context\LessOrEqualOperatorContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::lessOperator()}.
	 *
	 * @param Context\LessOperatorContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLessOperator(Context\LessOperatorContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::identifier()}.
	 *
	 * @param Context\IdentifierContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentifier(Context\IdentifierContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::unsignedInteger()}.
	 *
	 * @param Context\UnsignedIntegerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnsignedInteger(Context\UnsignedIntegerContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::signedInteger()}.
	 *
	 * @param Context\SignedIntegerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSignedInteger(Context\SignedIntegerContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::integer()}.
	 *
	 * @param Context\IntegerContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInteger(Context\IntegerContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::float()}.
	 *
	 * @param Context\FloatContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFloat(Context\FloatContext $context);

	/**
	 * Visit a parse tree produced by {@see JsonPathParser::string()}.
	 *
	 * @param Context\StringContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitString(Context\StringContext $context);
}