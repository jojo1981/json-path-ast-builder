<?php

/*
 * Generated from ./resources/JsonPath.g4 by ANTLR 4.13.2
 */

namespace Jojo1981\JsonPathAstBuilder\Parser {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class JsonPathParser extends Parser
	{
		public const SINGLE_DOT = 1, DOUBLE_DOT = 2, ASTERISK = 3, AT_SIGN = 4, 
               DOLLAR = 5, COMMA = 6, SINGLE_QUOTE = 7, DOUBLE_QUOTE = 8, 
               SQUARE_BRACKET_OPEN = 9, SQUARE_BRACKET_CLOSE = 10, ROUND_BRACKET_OPEN = 11, 
               ROUND_BRACKET_CLOSE = 12, QUESTION_MARK = 13, COLON = 14, 
               KEYWORD_TRUE = 15, KEYWORD_FALSE = 16, KEYWORD_NULL = 17, 
               KEYWORD_OR = 18, DOUBLE_PIPE = 19, DOUBLE_AMPERSAND = 20, 
               KEYWORD_AND = 21, EQUAL_OPERATOR1 = 22, EQUAL_OPERATOR2 = 23, 
               NOT_EQUAL_OPERATOR1 = 24, NOT_EQUAL_OPERATOR2 = 25, GREATER_OPERATOR1 = 26, 
               GREATER_OPERATOR2 = 27, GREATER_OR_EQUAL_OPERATOR1 = 28, 
               GREATER_OR_EQUAL_OPERATOR2 = 29, LESS_OPERATOR1 = 30, LESS_OPERATOR2 = 31, 
               LESS_OR_EQUAL_OPERATOR1 = 32, LESS_OR_EQUAL_OPERATOR2 = 33, 
               DOUBLE_QUOTED_STRING = 34, SINGLE_QUOTED_STRING = 35, SIGNED_INTEGER = 36, 
               UNSIGNED_INTEGER = 37, FLOAT = 38, IDENTIFIER = 39, WS = 40;

		public const RULE_path = 0, RULE_root = 1, RULE_pathSequence = 2, RULE_subscriptFilter = 3, 
               RULE_childAccess = 4, RULE_fieldAccessor = 5, RULE_dotField = 6, 
               RULE_recursiveSubscriptFilter = 7, RULE_recursiveAny = 8, 
               RULE_recursiveField = 9, RULE_anyChild = 10, RULE_subscriptField = 11, 
               RULE_arrayAccessor = 12, RULE_arrayAll = 13, RULE_arraySlice = 14, 
               RULE_arrayRandomAccess = 15, RULE_booleanExpression = 16, 
               RULE_andExpression = 17, RULE_orExpression = 18, RULE_expression = 19, 
               RULE_expression1 = 20, RULE_expression2 = 21, RULE_subQuery = 22, 
               RULE_current = 23, RULE_value = 24, RULE_stringValue = 25, 
               RULE_numberValue = 26, RULE_booleanValue = 27, RULE_nullValue = 28, 
               RULE_andOperator = 29, RULE_orOperator = 30, RULE_comparisonOperator = 31, 
               RULE_equalOperator = 32, RULE_notEqualOperator = 33, RULE_greaterOrEqualOperator = 34, 
               RULE_greaterOperator = 35, RULE_lessOrEqualOperator = 36, 
               RULE_lessOperator = 37, RULE_identifier = 38, RULE_unsignedInteger = 39, 
               RULE_signedInteger = 40, RULE_integer = 41, RULE_float = 42, 
               RULE_string = 43;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'path', 'root', 'pathSequence', 'subscriptFilter', 'childAccess', 'fieldAccessor', 
			'dotField', 'recursiveSubscriptFilter', 'recursiveAny', 'recursiveField', 
			'anyChild', 'subscriptField', 'arrayAccessor', 'arrayAll', 'arraySlice', 
			'arrayRandomAccess', 'booleanExpression', 'andExpression', 'orExpression', 
			'expression', 'expression1', 'expression2', 'subQuery', 'current', 'value', 
			'stringValue', 'numberValue', 'booleanValue', 'nullValue', 'andOperator', 
			'orOperator', 'comparisonOperator', 'equalOperator', 'notEqualOperator', 
			'greaterOrEqualOperator', 'greaterOperator', 'lessOrEqualOperator', 'lessOperator', 
			'identifier', 'unsignedInteger', 'signedInteger', 'integer', 'float', 
			'string'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'.'", "'..'", "'*'", "'@'", "'\$'", "','", "'''", "'\"'", "'['", 
		    "']'", "'('", "')'", "'?'", "':'", "'true'", "'false'", "'null'", 
		    "'or'", "'||'", "'&&'", "'and'", "'=='", "'eq'", "'!='", "'ne'", "'>'", 
		    "'gt'", "'>='", "'gte'", "'<'", "'lt'", "'<='", "'lte'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "SINGLE_DOT", "DOUBLE_DOT", "ASTERISK", "AT_SIGN", "DOLLAR", 
		    "COMMA", "SINGLE_QUOTE", "DOUBLE_QUOTE", "SQUARE_BRACKET_OPEN", "SQUARE_BRACKET_CLOSE", 
		    "ROUND_BRACKET_OPEN", "ROUND_BRACKET_CLOSE", "QUESTION_MARK", "COLON", 
		    "KEYWORD_TRUE", "KEYWORD_FALSE", "KEYWORD_NULL", "KEYWORD_OR", "DOUBLE_PIPE", 
		    "DOUBLE_AMPERSAND", "KEYWORD_AND", "EQUAL_OPERATOR1", "EQUAL_OPERATOR2", 
		    "NOT_EQUAL_OPERATOR1", "NOT_EQUAL_OPERATOR2", "GREATER_OPERATOR1", 
		    "GREATER_OPERATOR2", "GREATER_OR_EQUAL_OPERATOR1", "GREATER_OR_EQUAL_OPERATOR2", 
		    "LESS_OPERATOR1", "LESS_OPERATOR2", "LESS_OR_EQUAL_OPERATOR1", "LESS_OR_EQUAL_OPERATOR2", 
		    "DOUBLE_QUOTED_STRING", "SINGLE_QUOTED_STRING", "SIGNED_INTEGER", 
		    "UNSIGNED_INTEGER", "FLOAT", "IDENTIFIER", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 40, 301, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 2, 34, 7, 34, 2, 35, 7, 35, 2, 36, 7, 36, 2, 37, 7, 37, 2, 38, 
		    7, 38, 2, 39, 7, 39, 2, 40, 7, 40, 2, 41, 7, 41, 2, 42, 7, 42, 2, 
		    43, 7, 43, 1, 0, 3, 0, 90, 8, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 2, 1, 
		    2, 4, 2, 98, 8, 2, 11, 2, 12, 2, 99, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 
		    1, 3, 1, 3, 1, 4, 1, 4, 3, 4, 111, 8, 4, 1, 5, 1, 5, 1, 5, 1, 5, 1, 
		    5, 1, 5, 3, 5, 119, 8, 5, 1, 6, 1, 6, 1, 6, 1, 7, 1, 7, 3, 7, 126, 
		    8, 7, 1, 7, 1, 7, 1, 8, 1, 8, 3, 8, 132, 8, 8, 1, 9, 1, 9, 1, 9, 1, 
		    10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 
		    1, 10, 1, 10, 1, 10, 1, 10, 1, 10, 3, 10, 152, 8, 10, 1, 11, 1, 11, 
		    1, 11, 1, 11, 5, 11, 158, 8, 11, 10, 11, 12, 11, 161, 9, 11, 1, 11, 
		    1, 11, 1, 12, 1, 12, 1, 12, 1, 12, 3, 12, 169, 8, 12, 1, 12, 1, 12, 
		    1, 13, 1, 13, 1, 14, 3, 14, 176, 8, 14, 1, 14, 1, 14, 3, 14, 180, 
		    8, 14, 1, 14, 1, 14, 3, 14, 184, 8, 14, 1, 15, 1, 15, 1, 15, 5, 15, 
		    189, 8, 15, 10, 15, 12, 15, 192, 9, 15, 1, 16, 1, 16, 1, 16, 3, 16, 
		    197, 8, 16, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 1, 17, 5, 17, 
		    206, 8, 17, 10, 17, 12, 17, 209, 9, 17, 1, 18, 1, 18, 1, 18, 1, 18, 
		    1, 18, 1, 18, 1, 18, 5, 18, 218, 8, 18, 10, 18, 12, 18, 221, 9, 18, 
		    1, 19, 1, 19, 3, 19, 225, 8, 19, 1, 20, 1, 20, 1, 20, 1, 20, 3, 20, 
		    231, 8, 20, 3, 20, 233, 8, 20, 1, 21, 1, 21, 1, 21, 1, 21, 1, 22, 
		    1, 22, 3, 22, 241, 8, 22, 1, 22, 1, 22, 1, 23, 1, 23, 1, 24, 1, 24, 
		    1, 24, 1, 24, 3, 24, 251, 8, 24, 1, 25, 1, 25, 1, 26, 1, 26, 3, 26, 
		    257, 8, 26, 1, 27, 1, 27, 1, 28, 1, 28, 1, 29, 1, 29, 1, 30, 1, 30, 
		    1, 31, 1, 31, 1, 31, 1, 31, 1, 31, 1, 31, 3, 31, 273, 8, 31, 1, 32, 
		    1, 32, 1, 33, 1, 33, 1, 34, 1, 34, 1, 35, 1, 35, 1, 36, 1, 36, 1, 
		    37, 1, 37, 1, 38, 1, 38, 1, 39, 1, 39, 1, 40, 1, 40, 1, 41, 1, 41, 
		    3, 41, 295, 8, 41, 1, 42, 1, 42, 1, 43, 1, 43, 1, 43, 0, 2, 34, 36, 
		    44, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 
		    34, 36, 38, 40, 42, 44, 46, 48, 50, 52, 54, 56, 58, 60, 62, 64, 66, 
		    68, 70, 72, 74, 76, 78, 80, 82, 84, 86, 0, 10, 1, 0, 15, 16, 1, 0, 
		    20, 21, 1, 0, 18, 19, 1, 0, 22, 23, 1, 0, 24, 25, 1, 0, 28, 29, 1, 
		    0, 26, 27, 1, 0, 32, 33, 1, 0, 30, 31, 1, 0, 34, 35, 295, 0, 89, 1, 
		    0, 0, 0, 2, 93, 1, 0, 0, 0, 4, 97, 1, 0, 0, 0, 6, 101, 1, 0, 0, 0, 
		    8, 110, 1, 0, 0, 0, 10, 118, 1, 0, 0, 0, 12, 120, 1, 0, 0, 0, 14, 
		    123, 1, 0, 0, 0, 16, 129, 1, 0, 0, 0, 18, 133, 1, 0, 0, 0, 20, 151, 
		    1, 0, 0, 0, 22, 153, 1, 0, 0, 0, 24, 164, 1, 0, 0, 0, 26, 172, 1, 
		    0, 0, 0, 28, 175, 1, 0, 0, 0, 30, 185, 1, 0, 0, 0, 32, 196, 1, 0, 
		    0, 0, 34, 198, 1, 0, 0, 0, 36, 210, 1, 0, 0, 0, 38, 224, 1, 0, 0, 
		    0, 40, 226, 1, 0, 0, 0, 42, 234, 1, 0, 0, 0, 44, 240, 1, 0, 0, 0, 
		    46, 244, 1, 0, 0, 0, 48, 250, 1, 0, 0, 0, 50, 252, 1, 0, 0, 0, 52, 
		    256, 1, 0, 0, 0, 54, 258, 1, 0, 0, 0, 56, 260, 1, 0, 0, 0, 58, 262, 
		    1, 0, 0, 0, 60, 264, 1, 0, 0, 0, 62, 272, 1, 0, 0, 0, 64, 274, 1, 
		    0, 0, 0, 66, 276, 1, 0, 0, 0, 68, 278, 1, 0, 0, 0, 70, 280, 1, 0, 
		    0, 0, 72, 282, 1, 0, 0, 0, 74, 284, 1, 0, 0, 0, 76, 286, 1, 0, 0, 
		    0, 78, 288, 1, 0, 0, 0, 80, 290, 1, 0, 0, 0, 82, 294, 1, 0, 0, 0, 
		    84, 296, 1, 0, 0, 0, 86, 298, 1, 0, 0, 0, 88, 90, 3, 2, 1, 0, 89, 
		    88, 1, 0, 0, 0, 89, 90, 1, 0, 0, 0, 90, 91, 1, 0, 0, 0, 91, 92, 3, 
		    4, 2, 0, 92, 1, 1, 0, 0, 0, 93, 94, 5, 5, 0, 0, 94, 3, 1, 0, 0, 0, 
		    95, 98, 3, 8, 4, 0, 96, 98, 3, 6, 3, 0, 97, 95, 1, 0, 0, 0, 97, 96, 
		    1, 0, 0, 0, 98, 99, 1, 0, 0, 0, 99, 97, 1, 0, 0, 0, 99, 100, 1, 0, 
		    0, 0, 100, 5, 1, 0, 0, 0, 101, 102, 5, 9, 0, 0, 102, 103, 5, 13, 0, 
		    0, 103, 104, 5, 11, 0, 0, 104, 105, 3, 32, 16, 0, 105, 106, 5, 12, 
		    0, 0, 106, 107, 5, 10, 0, 0, 107, 7, 1, 0, 0, 0, 108, 111, 3, 10, 
		    5, 0, 109, 111, 3, 24, 12, 0, 110, 108, 1, 0, 0, 0, 110, 109, 1, 0, 
		    0, 0, 111, 9, 1, 0, 0, 0, 112, 119, 3, 12, 6, 0, 113, 119, 3, 14, 
		    7, 0, 114, 119, 3, 16, 8, 0, 115, 119, 3, 18, 9, 0, 116, 119, 3, 20, 
		    10, 0, 117, 119, 3, 22, 11, 0, 118, 112, 1, 0, 0, 0, 118, 113, 1, 
		    0, 0, 0, 118, 114, 1, 0, 0, 0, 118, 115, 1, 0, 0, 0, 118, 116, 1, 
		    0, 0, 0, 118, 117, 1, 0, 0, 0, 119, 11, 1, 0, 0, 0, 120, 121, 5, 1, 
		    0, 0, 121, 122, 3, 76, 38, 0, 122, 13, 1, 0, 0, 0, 123, 125, 5, 2, 
		    0, 0, 124, 126, 5, 3, 0, 0, 125, 124, 1, 0, 0, 0, 125, 126, 1, 0, 
		    0, 0, 126, 127, 1, 0, 0, 0, 127, 128, 3, 6, 3, 0, 128, 15, 1, 0, 0, 
		    0, 129, 131, 5, 2, 0, 0, 130, 132, 5, 3, 0, 0, 131, 130, 1, 0, 0, 
		    0, 131, 132, 1, 0, 0, 0, 132, 17, 1, 0, 0, 0, 133, 134, 5, 2, 0, 0, 
		    134, 135, 3, 76, 38, 0, 135, 19, 1, 0, 0, 0, 136, 137, 5, 1, 0, 0, 
		    137, 152, 5, 3, 0, 0, 138, 139, 5, 9, 0, 0, 139, 140, 5, 3, 0, 0, 
		    140, 152, 5, 10, 0, 0, 141, 142, 5, 9, 0, 0, 142, 143, 5, 7, 0, 0, 
		    143, 144, 5, 3, 0, 0, 144, 145, 5, 7, 0, 0, 145, 152, 5, 10, 0, 0, 
		    146, 147, 5, 9, 0, 0, 147, 148, 5, 8, 0, 0, 148, 149, 5, 3, 0, 0, 
		    149, 150, 5, 8, 0, 0, 150, 152, 5, 10, 0, 0, 151, 136, 1, 0, 0, 0, 
		    151, 138, 1, 0, 0, 0, 151, 141, 1, 0, 0, 0, 151, 146, 1, 0, 0, 0, 
		    152, 21, 1, 0, 0, 0, 153, 154, 5, 9, 0, 0, 154, 159, 3, 86, 43, 0, 
		    155, 156, 5, 6, 0, 0, 156, 158, 3, 86, 43, 0, 157, 155, 1, 0, 0, 0, 
		    158, 161, 1, 0, 0, 0, 159, 157, 1, 0, 0, 0, 159, 160, 1, 0, 0, 0, 
		    160, 162, 1, 0, 0, 0, 161, 159, 1, 0, 0, 0, 162, 163, 5, 10, 0, 0, 
		    163, 23, 1, 0, 0, 0, 164, 168, 5, 9, 0, 0, 165, 169, 3, 26, 13, 0, 
		    166, 169, 3, 28, 14, 0, 167, 169, 3, 30, 15, 0, 168, 165, 1, 0, 0, 
		    0, 168, 166, 1, 0, 0, 0, 168, 167, 1, 0, 0, 0, 169, 170, 1, 0, 0, 
		    0, 170, 171, 5, 10, 0, 0, 171, 25, 1, 0, 0, 0, 172, 173, 5, 3, 0, 
		    0, 173, 27, 1, 0, 0, 0, 174, 176, 3, 82, 41, 0, 175, 174, 1, 0, 0, 
		    0, 175, 176, 1, 0, 0, 0, 176, 177, 1, 0, 0, 0, 177, 179, 5, 14, 0, 
		    0, 178, 180, 3, 82, 41, 0, 179, 178, 1, 0, 0, 0, 179, 180, 1, 0, 0, 
		    0, 180, 183, 1, 0, 0, 0, 181, 182, 5, 14, 0, 0, 182, 184, 3, 78, 39, 
		    0, 183, 181, 1, 0, 0, 0, 183, 184, 1, 0, 0, 0, 184, 29, 1, 0, 0, 0, 
		    185, 190, 3, 78, 39, 0, 186, 187, 5, 6, 0, 0, 187, 189, 3, 78, 39, 
		    0, 188, 186, 1, 0, 0, 0, 189, 192, 1, 0, 0, 0, 190, 188, 1, 0, 0, 
		    0, 190, 191, 1, 0, 0, 0, 191, 31, 1, 0, 0, 0, 192, 190, 1, 0, 0, 0, 
		    193, 197, 3, 34, 17, 0, 194, 197, 3, 36, 18, 0, 195, 197, 3, 38, 19, 
		    0, 196, 193, 1, 0, 0, 0, 196, 194, 1, 0, 0, 0, 196, 195, 1, 0, 0, 
		    0, 197, 33, 1, 0, 0, 0, 198, 199, 6, 17, -1, 0, 199, 200, 3, 38, 19, 
		    0, 200, 207, 1, 0, 0, 0, 201, 202, 10, 2, 0, 0, 202, 203, 3, 58, 29, 
		    0, 203, 204, 3, 34, 17, 3, 204, 206, 1, 0, 0, 0, 205, 201, 1, 0, 0, 
		    0, 206, 209, 1, 0, 0, 0, 207, 205, 1, 0, 0, 0, 207, 208, 1, 0, 0, 
		    0, 208, 35, 1, 0, 0, 0, 209, 207, 1, 0, 0, 0, 210, 211, 6, 18, -1, 
		    0, 211, 212, 3, 38, 19, 0, 212, 219, 1, 0, 0, 0, 213, 214, 10, 2, 
		    0, 0, 214, 215, 3, 60, 30, 0, 215, 216, 3, 36, 18, 3, 216, 218, 1, 
		    0, 0, 0, 217, 213, 1, 0, 0, 0, 218, 221, 1, 0, 0, 0, 219, 217, 1, 
		    0, 0, 0, 219, 220, 1, 0, 0, 0, 220, 37, 1, 0, 0, 0, 221, 219, 1, 0, 
		    0, 0, 222, 225, 3, 40, 20, 0, 223, 225, 3, 42, 21, 0, 224, 222, 1, 
		    0, 0, 0, 224, 223, 1, 0, 0, 0, 225, 39, 1, 0, 0, 0, 226, 232, 3, 44, 
		    22, 0, 227, 230, 3, 62, 31, 0, 228, 231, 3, 44, 22, 0, 229, 231, 3, 
		    48, 24, 0, 230, 228, 1, 0, 0, 0, 230, 229, 1, 0, 0, 0, 231, 233, 1, 
		    0, 0, 0, 232, 227, 1, 0, 0, 0, 232, 233, 1, 0, 0, 0, 233, 41, 1, 0, 
		    0, 0, 234, 235, 3, 48, 24, 0, 235, 236, 3, 62, 31, 0, 236, 237, 3, 
		    44, 22, 0, 237, 43, 1, 0, 0, 0, 238, 241, 3, 46, 23, 0, 239, 241, 
		    3, 2, 1, 0, 240, 238, 1, 0, 0, 0, 240, 239, 1, 0, 0, 0, 241, 242, 
		    1, 0, 0, 0, 242, 243, 3, 4, 2, 0, 243, 45, 1, 0, 0, 0, 244, 245, 5, 
		    4, 0, 0, 245, 47, 1, 0, 0, 0, 246, 251, 3, 54, 27, 0, 247, 251, 3, 
		    52, 26, 0, 248, 251, 3, 56, 28, 0, 249, 251, 3, 50, 25, 0, 250, 246, 
		    1, 0, 0, 0, 250, 247, 1, 0, 0, 0, 250, 248, 1, 0, 0, 0, 250, 249, 
		    1, 0, 0, 0, 251, 49, 1, 0, 0, 0, 252, 253, 3, 86, 43, 0, 253, 51, 
		    1, 0, 0, 0, 254, 257, 3, 82, 41, 0, 255, 257, 3, 84, 42, 0, 256, 254, 
		    1, 0, 0, 0, 256, 255, 1, 0, 0, 0, 257, 53, 1, 0, 0, 0, 258, 259, 7, 
		    0, 0, 0, 259, 55, 1, 0, 0, 0, 260, 261, 5, 17, 0, 0, 261, 57, 1, 0, 
		    0, 0, 262, 263, 7, 1, 0, 0, 263, 59, 1, 0, 0, 0, 264, 265, 7, 2, 0, 
		    0, 265, 61, 1, 0, 0, 0, 266, 273, 3, 64, 32, 0, 267, 273, 3, 66, 33, 
		    0, 268, 273, 3, 68, 34, 0, 269, 273, 3, 70, 35, 0, 270, 273, 3, 72, 
		    36, 0, 271, 273, 3, 74, 37, 0, 272, 266, 1, 0, 0, 0, 272, 267, 1, 
		    0, 0, 0, 272, 268, 1, 0, 0, 0, 272, 269, 1, 0, 0, 0, 272, 270, 1, 
		    0, 0, 0, 272, 271, 1, 0, 0, 0, 273, 63, 1, 0, 0, 0, 274, 275, 7, 3, 
		    0, 0, 275, 65, 1, 0, 0, 0, 276, 277, 7, 4, 0, 0, 277, 67, 1, 0, 0, 
		    0, 278, 279, 7, 5, 0, 0, 279, 69, 1, 0, 0, 0, 280, 281, 7, 6, 0, 0, 
		    281, 71, 1, 0, 0, 0, 282, 283, 7, 7, 0, 0, 283, 73, 1, 0, 0, 0, 284, 
		    285, 7, 8, 0, 0, 285, 75, 1, 0, 0, 0, 286, 287, 5, 39, 0, 0, 287, 
		    77, 1, 0, 0, 0, 288, 289, 5, 37, 0, 0, 289, 79, 1, 0, 0, 0, 290, 291, 
		    5, 36, 0, 0, 291, 81, 1, 0, 0, 0, 292, 295, 3, 80, 40, 0, 293, 295, 
		    3, 78, 39, 0, 294, 292, 1, 0, 0, 0, 294, 293, 1, 0, 0, 0, 295, 83, 
		    1, 0, 0, 0, 296, 297, 5, 38, 0, 0, 297, 85, 1, 0, 0, 0, 298, 299, 
		    7, 9, 0, 0, 299, 87, 1, 0, 0, 0, 25, 89, 97, 99, 110, 118, 125, 131, 
		    151, 159, 168, 175, 179, 183, 190, 196, 207, 219, 224, 230, 232, 240, 
		    250, 256, 272, 294];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.2', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "JsonPath.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function path(): Context\PathContext
		{
		    $localContext = new Context\PathContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_path);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(89);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::DOLLAR) {
		        	$this->setState(88);
		        	$this->root();
		        }
		        $this->setState(91);
		        $this->pathSequence();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function root(): Context\RootContext
		{
		    $localContext = new Context\RootContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_root);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(93);
		        $this->match(self::DOLLAR);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function pathSequence(): Context\PathSequenceContext
		{
		    $localContext = new Context\PathSequenceContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_pathSequence);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(97); 
		        $this->errorHandler->sync($this);

		        $alt = 1;

		        do {
		        	switch ($alt) {
		        	case 1:
		        		$this->setState(97);
		        		$this->errorHandler->sync($this);

		        		switch ($this->getInterpreter()->adaptivePredict($this->input, 1, $this->ctx)) {
		        			case 1:
		        			    $this->setState(95);
		        			    $this->childAccess();
		        			break;

		        			case 2:
		        			    $this->setState(96);
		        			    $this->subscriptFilter();
		        			break;
		        		}
		        		break;
		        	default:
		        		throw new NoViableAltException($this);
		        	}

		        	$this->setState(99); 
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx);
		        } while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function subscriptFilter(): Context\SubscriptFilterContext
		{
		    $localContext = new Context\SubscriptFilterContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_subscriptFilter);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(101);
		        $this->match(self::SQUARE_BRACKET_OPEN);
		        $this->setState(102);
		        $this->match(self::QUESTION_MARK);
		        $this->setState(103);
		        $this->match(self::ROUND_BRACKET_OPEN);
		        $this->setState(104);
		        $this->booleanExpression();
		        $this->setState(105);
		        $this->match(self::ROUND_BRACKET_CLOSE);
		        $this->setState(106);
		        $this->match(self::SQUARE_BRACKET_CLOSE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function childAccess(): Context\ChildAccessContext
		{
		    $localContext = new Context\ChildAccessContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_childAccess);

		    try {
		        $this->setState(110);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 3, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(108);
		        	    $this->fieldAccessor();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(109);
		        	    $this->arrayAccessor();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function fieldAccessor(): Context\FieldAccessorContext
		{
		    $localContext = new Context\FieldAccessorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_fieldAccessor);

		    try {
		        $this->setState(118);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(112);
		        	    $this->dotField();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(113);
		        	    $this->recursiveSubscriptFilter();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(114);
		        	    $this->recursiveAny();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(115);
		        	    $this->recursiveField();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(116);
		        	    $this->anyChild();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(117);
		        	    $this->subscriptField();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function dotField(): Context\DotFieldContext
		{
		    $localContext = new Context\DotFieldContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_dotField);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(120);
		        $this->match(self::SINGLE_DOT);
		        $this->setState(121);
		        $this->identifier();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function recursiveSubscriptFilter(): Context\RecursiveSubscriptFilterContext
		{
		    $localContext = new Context\RecursiveSubscriptFilterContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_recursiveSubscriptFilter);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(123);
		        $this->match(self::DOUBLE_DOT);
		        $this->setState(125);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ASTERISK) {
		        	$this->setState(124);
		        	$this->match(self::ASTERISK);
		        }
		        $this->setState(127);
		        $this->subscriptFilter();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function recursiveAny(): Context\RecursiveAnyContext
		{
		    $localContext = new Context\RecursiveAnyContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_recursiveAny);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(129);
		        $this->match(self::DOUBLE_DOT);
		        $this->setState(131);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx)) {
		            case 1:
		        	    $this->setState(130);
		        	    $this->match(self::ASTERISK);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function recursiveField(): Context\RecursiveFieldContext
		{
		    $localContext = new Context\RecursiveFieldContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_recursiveField);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(133);
		        $this->match(self::DOUBLE_DOT);
		        $this->setState(134);
		        $this->identifier();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function anyChild(): Context\AnyChildContext
		{
		    $localContext = new Context\AnyChildContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_anyChild);

		    try {
		        $this->setState(151);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(136);
		        	    $this->match(self::SINGLE_DOT);
		        	    $this->setState(137);
		        	    $this->match(self::ASTERISK);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(138);
		        	    $this->match(self::SQUARE_BRACKET_OPEN);
		        	    $this->setState(139);
		        	    $this->match(self::ASTERISK);
		        	    $this->setState(140);
		        	    $this->match(self::SQUARE_BRACKET_CLOSE);
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(141);
		        	    $this->match(self::SQUARE_BRACKET_OPEN);
		        	    $this->setState(142);
		        	    $this->match(self::SINGLE_QUOTE);
		        	    $this->setState(143);
		        	    $this->match(self::ASTERISK);
		        	    $this->setState(144);
		        	    $this->match(self::SINGLE_QUOTE);
		        	    $this->setState(145);
		        	    $this->match(self::SQUARE_BRACKET_CLOSE);
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(146);
		        	    $this->match(self::SQUARE_BRACKET_OPEN);
		        	    $this->setState(147);
		        	    $this->match(self::DOUBLE_QUOTE);
		        	    $this->setState(148);
		        	    $this->match(self::ASTERISK);
		        	    $this->setState(149);
		        	    $this->match(self::DOUBLE_QUOTE);
		        	    $this->setState(150);
		        	    $this->match(self::SQUARE_BRACKET_CLOSE);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function subscriptField(): Context\SubscriptFieldContext
		{
		    $localContext = new Context\SubscriptFieldContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_subscriptField);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(153);
		        $this->match(self::SQUARE_BRACKET_OPEN);
		        $this->setState(154);
		        $this->string();
		        $this->setState(159);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(155);
		        	$this->match(self::COMMA);
		        	$this->setState(156);
		        	$this->string();
		        	$this->setState(161);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(162);
		        $this->match(self::SQUARE_BRACKET_CLOSE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayAccessor(): Context\ArrayAccessorContext
		{
		    $localContext = new Context\ArrayAccessorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_arrayAccessor);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(164);
		        $this->match(self::SQUARE_BRACKET_OPEN);
		        $this->setState(168);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx)) {
		        	case 1:
		        	    $this->setState(165);
		        	    $this->arrayAll();
		        	break;

		        	case 2:
		        	    $this->setState(166);
		        	    $this->arraySlice();
		        	break;

		        	case 3:
		        	    $this->setState(167);
		        	    $this->arrayRandomAccess();
		        	break;
		        }
		        $this->setState(170);
		        $this->match(self::SQUARE_BRACKET_CLOSE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayAll(): Context\ArrayAllContext
		{
		    $localContext = new Context\ArrayAllContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_arrayAll);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(172);
		        $this->match(self::ASTERISK);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arraySlice(): Context\ArraySliceContext
		{
		    $localContext = new Context\ArraySliceContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_arraySlice);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(175);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::SIGNED_INTEGER || $_la === self::UNSIGNED_INTEGER) {
		        	$this->setState(174);
		        	$this->integer();
		        }
		        $this->setState(177);
		        $this->match(self::COLON);
		        $this->setState(179);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::SIGNED_INTEGER || $_la === self::UNSIGNED_INTEGER) {
		        	$this->setState(178);
		        	$this->integer();
		        }
		        $this->setState(183);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::COLON) {
		        	$this->setState(181);
		        	$this->match(self::COLON);
		        	$this->setState(182);
		        	$this->unsignedInteger();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayRandomAccess(): Context\ArrayRandomAccessContext
		{
		    $localContext = new Context\ArrayRandomAccessContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_arrayRandomAccess);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(185);
		        $this->unsignedInteger();
		        $this->setState(190);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(186);
		        	$this->match(self::COMMA);
		        	$this->setState(187);
		        	$this->unsignedInteger();
		        	$this->setState(192);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function booleanExpression(): Context\BooleanExpressionContext
		{
		    $localContext = new Context\BooleanExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_booleanExpression);

		    try {
		        $this->setState(196);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 14, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(193);
		        	    $this->recursiveAndExpression(0);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(194);
		        	    $this->recursiveOrExpression(0);
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(195);
		        	    $this->expression();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function andExpression(): Context\AndExpressionContext
		{
			return $this->recursiveAndExpression(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveAndExpression(int $precedence): Context\AndExpressionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\AndExpressionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 34;
			$this->enterRecursionRule($localContext, 34, self::RULE_andExpression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(199);
				$this->expression();
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(207);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 15, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\AndExpressionContext($parentContext, $parentState);
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_andExpression);
						$this->setState(201);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(202);
						$this->andOperator();
						$this->setState(203);
						$this->recursiveAndExpression(3); 
					}

					$this->setState(209);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 15, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function orExpression(): Context\OrExpressionContext
		{
			return $this->recursiveOrExpression(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveOrExpression(int $precedence): Context\OrExpressionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\OrExpressionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 36;
			$this->enterRecursionRule($localContext, 36, self::RULE_orExpression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(211);
				$this->expression();
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(219);
				$this->errorHandler->sync($this);

				$alt = $this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx);

				while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
					if ($alt === 1) {
						if ($this->getParseListeners() !== null) {
						    $this->triggerExitRuleEvent();
						}

						$previousContext = $localContext;
						$localContext = new Context\OrExpressionContext($parentContext, $parentState);
						$this->pushNewRecursionContext($localContext, $startState, self::RULE_orExpression);
						$this->setState(213);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(214);
						$this->orOperator();
						$this->setState(215);
						$this->recursiveOrExpression(3); 
					}

					$this->setState(221);
					$this->errorHandler->sync($this);

					$alt = $this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx);
				}
			} catch (RecognitionException $exception) {
				$localContext->exception = $exception;
				$this->errorHandler->reportError($this, $exception);
				$this->errorHandler->recover($this, $exception);
			} finally {
				$this->unrollRecursionContexts($parentContext);
			}

			return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression(): Context\ExpressionContext
		{
		    $localContext = new Context\ExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_expression);

		    try {
		        $this->setState(224);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::AT_SIGN:
		            case self::DOLLAR:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(222);
		            	$this->expression1();
		            	break;

		            case self::KEYWORD_TRUE:
		            case self::KEYWORD_FALSE:
		            case self::KEYWORD_NULL:
		            case self::DOUBLE_QUOTED_STRING:
		            case self::SINGLE_QUOTED_STRING:
		            case self::SIGNED_INTEGER:
		            case self::UNSIGNED_INTEGER:
		            case self::FLOAT:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(223);
		            	$this->expression2();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression1(): Context\Expression1Context
		{
		    $localContext = new Context\Expression1Context($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_expression1);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(226);
		        $this->subQuery();
		        $this->setState(232);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 19, $this->ctx)) {
		            case 1:
		        	    $this->setState(227);
		        	    $this->comparisonOperator();
		        	    $this->setState(230);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->input->LA(1)) {
		        	        case self::AT_SIGN:
		        	        case self::DOLLAR:
		        	        	$this->setState(228);
		        	        	$this->subQuery();
		        	        	break;

		        	        case self::KEYWORD_TRUE:
		        	        case self::KEYWORD_FALSE:
		        	        case self::KEYWORD_NULL:
		        	        case self::DOUBLE_QUOTED_STRING:
		        	        case self::SINGLE_QUOTED_STRING:
		        	        case self::SIGNED_INTEGER:
		        	        case self::UNSIGNED_INTEGER:
		        	        case self::FLOAT:
		        	        	$this->setState(229);
		        	        	$this->value();
		        	        	break;

		        	    default:
		        	    	throw new NoViableAltException($this);
		        	    }
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression2(): Context\Expression2Context
		{
		    $localContext = new Context\Expression2Context($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_expression2);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(234);
		        $this->value();
		        $this->setState(235);
		        $this->comparisonOperator();
		        $this->setState(236);
		        $this->subQuery();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function subQuery(): Context\SubQueryContext
		{
		    $localContext = new Context\SubQueryContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_subQuery);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(240);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::AT_SIGN:
		            	$this->setState(238);
		            	$this->current();
		            	break;

		            case self::DOLLAR:
		            	$this->setState(239);
		            	$this->root();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		        $this->setState(242);
		        $this->pathSequence();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function current(): Context\CurrentContext
		{
		    $localContext = new Context\CurrentContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_current);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(244);
		        $this->match(self::AT_SIGN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function value(): Context\ValueContext
		{
		    $localContext = new Context\ValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_value);

		    try {
		        $this->setState(250);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::KEYWORD_TRUE:
		            case self::KEYWORD_FALSE:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(246);
		            	$this->booleanValue();
		            	break;

		            case self::SIGNED_INTEGER:
		            case self::UNSIGNED_INTEGER:
		            case self::FLOAT:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(247);
		            	$this->numberValue();
		            	break;

		            case self::KEYWORD_NULL:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(248);
		            	$this->nullValue();
		            	break;

		            case self::DOUBLE_QUOTED_STRING:
		            case self::SINGLE_QUOTED_STRING:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(249);
		            	$this->stringValue();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function stringValue(): Context\StringValueContext
		{
		    $localContext = new Context\StringValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 50, self::RULE_stringValue);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(252);
		        $this->string();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function numberValue(): Context\NumberValueContext
		{
		    $localContext = new Context\NumberValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_numberValue);

		    try {
		        $this->setState(256);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::SIGNED_INTEGER:
		            case self::UNSIGNED_INTEGER:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(254);
		            	$this->integer();
		            	break;

		            case self::FLOAT:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(255);
		            	$this->float();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function booleanValue(): Context\BooleanValueContext
		{
		    $localContext = new Context\BooleanValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_booleanValue);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(258);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::KEYWORD_TRUE || $_la === self::KEYWORD_FALSE)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function nullValue(): Context\NullValueContext
		{
		    $localContext = new Context\NullValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 56, self::RULE_nullValue);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(260);
		        $this->match(self::KEYWORD_NULL);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function andOperator(): Context\AndOperatorContext
		{
		    $localContext = new Context\AndOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 58, self::RULE_andOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(262);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::DOUBLE_AMPERSAND || $_la === self::KEYWORD_AND)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function orOperator(): Context\OrOperatorContext
		{
		    $localContext = new Context\OrOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_orOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(264);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::KEYWORD_OR || $_la === self::DOUBLE_PIPE)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function comparisonOperator(): Context\ComparisonOperatorContext
		{
		    $localContext = new Context\ComparisonOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 62, self::RULE_comparisonOperator);

		    try {
		        $this->setState(272);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::EQUAL_OPERATOR1:
		            case self::EQUAL_OPERATOR2:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(266);
		            	$this->equalOperator();
		            	break;

		            case self::NOT_EQUAL_OPERATOR1:
		            case self::NOT_EQUAL_OPERATOR2:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(267);
		            	$this->notEqualOperator();
		            	break;

		            case self::GREATER_OR_EQUAL_OPERATOR1:
		            case self::GREATER_OR_EQUAL_OPERATOR2:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(268);
		            	$this->greaterOrEqualOperator();
		            	break;

		            case self::GREATER_OPERATOR1:
		            case self::GREATER_OPERATOR2:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(269);
		            	$this->greaterOperator();
		            	break;

		            case self::LESS_OR_EQUAL_OPERATOR1:
		            case self::LESS_OR_EQUAL_OPERATOR2:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(270);
		            	$this->lessOrEqualOperator();
		            	break;

		            case self::LESS_OPERATOR1:
		            case self::LESS_OPERATOR2:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(271);
		            	$this->lessOperator();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function equalOperator(): Context\EqualOperatorContext
		{
		    $localContext = new Context\EqualOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 64, self::RULE_equalOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(274);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::EQUAL_OPERATOR1 || $_la === self::EQUAL_OPERATOR2)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function notEqualOperator(): Context\NotEqualOperatorContext
		{
		    $localContext = new Context\NotEqualOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 66, self::RULE_notEqualOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(276);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::NOT_EQUAL_OPERATOR1 || $_la === self::NOT_EQUAL_OPERATOR2)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function greaterOrEqualOperator(): Context\GreaterOrEqualOperatorContext
		{
		    $localContext = new Context\GreaterOrEqualOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 68, self::RULE_greaterOrEqualOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(278);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::GREATER_OR_EQUAL_OPERATOR1 || $_la === self::GREATER_OR_EQUAL_OPERATOR2)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function greaterOperator(): Context\GreaterOperatorContext
		{
		    $localContext = new Context\GreaterOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 70, self::RULE_greaterOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(280);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::GREATER_OPERATOR1 || $_la === self::GREATER_OPERATOR2)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function lessOrEqualOperator(): Context\LessOrEqualOperatorContext
		{
		    $localContext = new Context\LessOrEqualOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 72, self::RULE_lessOrEqualOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(282);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::LESS_OR_EQUAL_OPERATOR1 || $_la === self::LESS_OR_EQUAL_OPERATOR2)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function lessOperator(): Context\LessOperatorContext
		{
		    $localContext = new Context\LessOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 74, self::RULE_lessOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(284);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::LESS_OPERATOR1 || $_la === self::LESS_OPERATOR2)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function identifier(): Context\IdentifierContext
		{
		    $localContext = new Context\IdentifierContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 76, self::RULE_identifier);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(286);
		        $this->match(self::IDENTIFIER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function unsignedInteger(): Context\UnsignedIntegerContext
		{
		    $localContext = new Context\UnsignedIntegerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 78, self::RULE_unsignedInteger);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(288);
		        $this->match(self::UNSIGNED_INTEGER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function signedInteger(): Context\SignedIntegerContext
		{
		    $localContext = new Context\SignedIntegerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 80, self::RULE_signedInteger);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(290);
		        $this->match(self::SIGNED_INTEGER);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function integer(): Context\IntegerContext
		{
		    $localContext = new Context\IntegerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 82, self::RULE_integer);

		    try {
		        $this->setState(294);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::SIGNED_INTEGER:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(292);
		            	$this->signedInteger();
		            	break;

		            case self::UNSIGNED_INTEGER:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(293);
		            	$this->unsignedInteger();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function float(): Context\FloatContext
		{
		    $localContext = new Context\FloatContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 84, self::RULE_float);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(296);
		        $this->match(self::FLOAT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function string(): Context\StringContext
		{
		    $localContext = new Context\StringContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 86, self::RULE_string);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(298);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::DOUBLE_QUOTED_STRING || $_la === self::SINGLE_QUOTED_STRING)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex): bool
		{
			switch ($ruleIndex) {
					case 17:
						return $this->sempredAndExpression($localContext, $predicateIndex);

					case 18:
						return $this->sempredOrExpression($localContext, $predicateIndex);

				default:
					return true;
				}
		}

		private function sempredAndExpression(?Context\AndExpressionContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 2);
			}

			return true;
		}

		private function sempredOrExpression(?Context\OrExpressionContext $localContext, int $predicateIndex): bool
		{
			switch ($predicateIndex) {
			    case 1:
			        return $this->precpred($this->ctx, 2);
			}

			return true;
		}
	}
}

namespace Jojo1981\JsonPathAstBuilder\Parser\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use Jojo1981\JsonPathAstBuilder\Parser\JsonPathParser;
	use Jojo1981\JsonPathAstBuilder\Parser\JsonPathVisitor;
	use Jojo1981\JsonPathAstBuilder\Parser\JsonPathListener;

	class PathContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_path;
	    }

	    public function pathSequence(): ?PathSequenceContext
	    {
	    	return $this->getTypedRuleContext(PathSequenceContext::class, 0);
	    }

	    public function root(): ?RootContext
	    {
	    	return $this->getTypedRuleContext(RootContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterPath($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitPath($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitPath($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class RootContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_root;
	    }

	    public function DOLLAR(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::DOLLAR, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterRoot($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitRoot($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitRoot($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PathSequenceContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_pathSequence;
	    }

	    /**
	     * @return array<ChildAccessContext>|ChildAccessContext|null
	     */
	    public function childAccess(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ChildAccessContext::class);
	    	}

	        return $this->getTypedRuleContext(ChildAccessContext::class, $index);
	    }

	    /**
	     * @return array<SubscriptFilterContext>|SubscriptFilterContext|null
	     */
	    public function subscriptFilter(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SubscriptFilterContext::class);
	    	}

	        return $this->getTypedRuleContext(SubscriptFilterContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterPathSequence($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitPathSequence($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitPathSequence($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SubscriptFilterContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_subscriptFilter;
	    }

	    public function SQUARE_BRACKET_OPEN(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SQUARE_BRACKET_OPEN, 0);
	    }

	    public function QUESTION_MARK(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::QUESTION_MARK, 0);
	    }

	    public function ROUND_BRACKET_OPEN(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::ROUND_BRACKET_OPEN, 0);
	    }

	    public function booleanExpression(): ?BooleanExpressionContext
	    {
	    	return $this->getTypedRuleContext(BooleanExpressionContext::class, 0);
	    }

	    public function ROUND_BRACKET_CLOSE(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::ROUND_BRACKET_CLOSE, 0);
	    }

	    public function SQUARE_BRACKET_CLOSE(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SQUARE_BRACKET_CLOSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterSubscriptFilter($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitSubscriptFilter($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitSubscriptFilter($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ChildAccessContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_childAccess;
	    }

	    public function fieldAccessor(): ?FieldAccessorContext
	    {
	    	return $this->getTypedRuleContext(FieldAccessorContext::class, 0);
	    }

	    public function arrayAccessor(): ?ArrayAccessorContext
	    {
	    	return $this->getTypedRuleContext(ArrayAccessorContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterChildAccess($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitChildAccess($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitChildAccess($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FieldAccessorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_fieldAccessor;
	    }

	    public function dotField(): ?DotFieldContext
	    {
	    	return $this->getTypedRuleContext(DotFieldContext::class, 0);
	    }

	    public function recursiveSubscriptFilter(): ?RecursiveSubscriptFilterContext
	    {
	    	return $this->getTypedRuleContext(RecursiveSubscriptFilterContext::class, 0);
	    }

	    public function recursiveAny(): ?RecursiveAnyContext
	    {
	    	return $this->getTypedRuleContext(RecursiveAnyContext::class, 0);
	    }

	    public function recursiveField(): ?RecursiveFieldContext
	    {
	    	return $this->getTypedRuleContext(RecursiveFieldContext::class, 0);
	    }

	    public function anyChild(): ?AnyChildContext
	    {
	    	return $this->getTypedRuleContext(AnyChildContext::class, 0);
	    }

	    public function subscriptField(): ?SubscriptFieldContext
	    {
	    	return $this->getTypedRuleContext(SubscriptFieldContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterFieldAccessor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitFieldAccessor($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitFieldAccessor($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DotFieldContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_dotField;
	    }

	    public function SINGLE_DOT(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SINGLE_DOT, 0);
	    }

	    public function identifier(): ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterDotField($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitDotField($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitDotField($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class RecursiveSubscriptFilterContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_recursiveSubscriptFilter;
	    }

	    public function subscriptFilter(): ?SubscriptFilterContext
	    {
	    	return $this->getTypedRuleContext(SubscriptFilterContext::class, 0);
	    }

	    public function DOUBLE_DOT(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::DOUBLE_DOT, 0);
	    }

	    public function ASTERISK(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::ASTERISK, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterRecursiveSubscriptFilter($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitRecursiveSubscriptFilter($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitRecursiveSubscriptFilter($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class RecursiveAnyContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_recursiveAny;
	    }

	    public function DOUBLE_DOT(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::DOUBLE_DOT, 0);
	    }

	    public function ASTERISK(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::ASTERISK, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterRecursiveAny($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitRecursiveAny($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitRecursiveAny($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class RecursiveFieldContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_recursiveField;
	    }

	    public function DOUBLE_DOT(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::DOUBLE_DOT, 0);
	    }

	    public function identifier(): ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterRecursiveField($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitRecursiveField($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitRecursiveField($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AnyChildContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_anyChild;
	    }

	    public function SINGLE_DOT(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SINGLE_DOT, 0);
	    }

	    public function ASTERISK(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::ASTERISK, 0);
	    }

	    public function SQUARE_BRACKET_OPEN(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SQUARE_BRACKET_OPEN, 0);
	    }

	    public function SQUARE_BRACKET_CLOSE(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SQUARE_BRACKET_CLOSE, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function SINGLE_QUOTE(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(JsonPathParser::SINGLE_QUOTE);
	    	}

	        return $this->getToken(JsonPathParser::SINGLE_QUOTE, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function DOUBLE_QUOTE(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(JsonPathParser::DOUBLE_QUOTE);
	    	}

	        return $this->getToken(JsonPathParser::DOUBLE_QUOTE, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterAnyChild($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitAnyChild($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitAnyChild($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SubscriptFieldContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_subscriptField;
	    }

	    public function SQUARE_BRACKET_OPEN(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SQUARE_BRACKET_OPEN, 0);
	    }

	    /**
	     * @return array<StringContext>|StringContext|null
	     */
	    public function string(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StringContext::class);
	    	}

	        return $this->getTypedRuleContext(StringContext::class, $index);
	    }

	    public function SQUARE_BRACKET_CLOSE(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SQUARE_BRACKET_CLOSE, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(JsonPathParser::COMMA);
	    	}

	        return $this->getToken(JsonPathParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterSubscriptField($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitSubscriptField($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitSubscriptField($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayAccessorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_arrayAccessor;
	    }

	    public function SQUARE_BRACKET_OPEN(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SQUARE_BRACKET_OPEN, 0);
	    }

	    public function SQUARE_BRACKET_CLOSE(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SQUARE_BRACKET_CLOSE, 0);
	    }

	    public function arrayAll(): ?ArrayAllContext
	    {
	    	return $this->getTypedRuleContext(ArrayAllContext::class, 0);
	    }

	    public function arraySlice(): ?ArraySliceContext
	    {
	    	return $this->getTypedRuleContext(ArraySliceContext::class, 0);
	    }

	    public function arrayRandomAccess(): ?ArrayRandomAccessContext
	    {
	    	return $this->getTypedRuleContext(ArrayRandomAccessContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterArrayAccessor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitArrayAccessor($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitArrayAccessor($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayAllContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_arrayAll;
	    }

	    public function ASTERISK(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::ASTERISK, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterArrayAll($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitArrayAll($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitArrayAll($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArraySliceContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_arraySlice;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COLON(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(JsonPathParser::COLON);
	    	}

	        return $this->getToken(JsonPathParser::COLON, $index);
	    }

	    /**
	     * @return array<IntegerContext>|IntegerContext|null
	     */
	    public function integer(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(IntegerContext::class);
	    	}

	        return $this->getTypedRuleContext(IntegerContext::class, $index);
	    }

	    public function unsignedInteger(): ?UnsignedIntegerContext
	    {
	    	return $this->getTypedRuleContext(UnsignedIntegerContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterArraySlice($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitArraySlice($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitArraySlice($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayRandomAccessContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_arrayRandomAccess;
	    }

	    /**
	     * @return array<UnsignedIntegerContext>|UnsignedIntegerContext|null
	     */
	    public function unsignedInteger(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(UnsignedIntegerContext::class);
	    	}

	        return $this->getTypedRuleContext(UnsignedIntegerContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(JsonPathParser::COMMA);
	    	}

	        return $this->getToken(JsonPathParser::COMMA, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterArrayRandomAccess($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitArrayRandomAccess($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitArrayRandomAccess($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BooleanExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_booleanExpression;
	    }

	    public function andExpression(): ?AndExpressionContext
	    {
	    	return $this->getTypedRuleContext(AndExpressionContext::class, 0);
	    }

	    public function orExpression(): ?OrExpressionContext
	    {
	    	return $this->getTypedRuleContext(OrExpressionContext::class, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterBooleanExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitBooleanExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitBooleanExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AndExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_andExpression;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    /**
	     * @return array<AndExpressionContext>|AndExpressionContext|null
	     */
	    public function andExpression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(AndExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(AndExpressionContext::class, $index);
	    }

	    public function andOperator(): ?AndOperatorContext
	    {
	    	return $this->getTypedRuleContext(AndOperatorContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterAndExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitAndExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitAndExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class OrExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_orExpression;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    /**
	     * @return array<OrExpressionContext>|OrExpressionContext|null
	     */
	    public function orExpression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(OrExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(OrExpressionContext::class, $index);
	    }

	    public function orOperator(): ?OrOperatorContext
	    {
	    	return $this->getTypedRuleContext(OrOperatorContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterOrExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitOrExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitOrExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_expression;
	    }

	    public function expression1(): ?Expression1Context
	    {
	    	return $this->getTypedRuleContext(Expression1Context::class, 0);
	    }

	    public function expression2(): ?Expression2Context
	    {
	    	return $this->getTypedRuleContext(Expression2Context::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Expression1Context extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_expression1;
	    }

	    /**
	     * @return array<SubQueryContext>|SubQueryContext|null
	     */
	    public function subQuery(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SubQueryContext::class);
	    	}

	        return $this->getTypedRuleContext(SubQueryContext::class, $index);
	    }

	    public function comparisonOperator(): ?ComparisonOperatorContext
	    {
	    	return $this->getTypedRuleContext(ComparisonOperatorContext::class, 0);
	    }

	    public function value(): ?ValueContext
	    {
	    	return $this->getTypedRuleContext(ValueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterExpression1($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitExpression1($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitExpression1($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class Expression2Context extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_expression2;
	    }

	    public function value(): ?ValueContext
	    {
	    	return $this->getTypedRuleContext(ValueContext::class, 0);
	    }

	    public function comparisonOperator(): ?ComparisonOperatorContext
	    {
	    	return $this->getTypedRuleContext(ComparisonOperatorContext::class, 0);
	    }

	    public function subQuery(): ?SubQueryContext
	    {
	    	return $this->getTypedRuleContext(SubQueryContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterExpression2($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitExpression2($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitExpression2($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SubQueryContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_subQuery;
	    }

	    public function pathSequence(): ?PathSequenceContext
	    {
	    	return $this->getTypedRuleContext(PathSequenceContext::class, 0);
	    }

	    public function current(): ?CurrentContext
	    {
	    	return $this->getTypedRuleContext(CurrentContext::class, 0);
	    }

	    public function root(): ?RootContext
	    {
	    	return $this->getTypedRuleContext(RootContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterSubQuery($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitSubQuery($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitSubQuery($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CurrentContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_current;
	    }

	    public function AT_SIGN(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::AT_SIGN, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterCurrent($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitCurrent($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitCurrent($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ValueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_value;
	    }

	    public function booleanValue(): ?BooleanValueContext
	    {
	    	return $this->getTypedRuleContext(BooleanValueContext::class, 0);
	    }

	    public function numberValue(): ?NumberValueContext
	    {
	    	return $this->getTypedRuleContext(NumberValueContext::class, 0);
	    }

	    public function nullValue(): ?NullValueContext
	    {
	    	return $this->getTypedRuleContext(NullValueContext::class, 0);
	    }

	    public function stringValue(): ?StringValueContext
	    {
	    	return $this->getTypedRuleContext(StringValueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitValue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitValue($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class StringValueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_stringValue;
	    }

	    public function string(): ?StringContext
	    {
	    	return $this->getTypedRuleContext(StringContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterStringValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitStringValue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitStringValue($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class NumberValueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_numberValue;
	    }

	    public function integer(): ?IntegerContext
	    {
	    	return $this->getTypedRuleContext(IntegerContext::class, 0);
	    }

	    public function float(): ?FloatContext
	    {
	    	return $this->getTypedRuleContext(FloatContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterNumberValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitNumberValue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitNumberValue($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BooleanValueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_booleanValue;
	    }

	    public function KEYWORD_TRUE(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::KEYWORD_TRUE, 0);
	    }

	    public function KEYWORD_FALSE(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::KEYWORD_FALSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterBooleanValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitBooleanValue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitBooleanValue($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class NullValueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_nullValue;
	    }

	    public function KEYWORD_NULL(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::KEYWORD_NULL, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterNullValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitNullValue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitNullValue($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AndOperatorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_andOperator;
	    }

	    public function KEYWORD_AND(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::KEYWORD_AND, 0);
	    }

	    public function DOUBLE_AMPERSAND(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::DOUBLE_AMPERSAND, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterAndOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitAndOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitAndOperator($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class OrOperatorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_orOperator;
	    }

	    public function KEYWORD_OR(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::KEYWORD_OR, 0);
	    }

	    public function DOUBLE_PIPE(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::DOUBLE_PIPE, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterOrOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitOrOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitOrOperator($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ComparisonOperatorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_comparisonOperator;
	    }

	    public function equalOperator(): ?EqualOperatorContext
	    {
	    	return $this->getTypedRuleContext(EqualOperatorContext::class, 0);
	    }

	    public function notEqualOperator(): ?NotEqualOperatorContext
	    {
	    	return $this->getTypedRuleContext(NotEqualOperatorContext::class, 0);
	    }

	    public function greaterOrEqualOperator(): ?GreaterOrEqualOperatorContext
	    {
	    	return $this->getTypedRuleContext(GreaterOrEqualOperatorContext::class, 0);
	    }

	    public function greaterOperator(): ?GreaterOperatorContext
	    {
	    	return $this->getTypedRuleContext(GreaterOperatorContext::class, 0);
	    }

	    public function lessOrEqualOperator(): ?LessOrEqualOperatorContext
	    {
	    	return $this->getTypedRuleContext(LessOrEqualOperatorContext::class, 0);
	    }

	    public function lessOperator(): ?LessOperatorContext
	    {
	    	return $this->getTypedRuleContext(LessOperatorContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterComparisonOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitComparisonOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitComparisonOperator($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EqualOperatorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_equalOperator;
	    }

	    public function EQUAL_OPERATOR1(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::EQUAL_OPERATOR1, 0);
	    }

	    public function EQUAL_OPERATOR2(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::EQUAL_OPERATOR2, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterEqualOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitEqualOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitEqualOperator($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class NotEqualOperatorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_notEqualOperator;
	    }

	    public function NOT_EQUAL_OPERATOR1(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::NOT_EQUAL_OPERATOR1, 0);
	    }

	    public function NOT_EQUAL_OPERATOR2(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::NOT_EQUAL_OPERATOR2, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterNotEqualOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitNotEqualOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitNotEqualOperator($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class GreaterOrEqualOperatorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_greaterOrEqualOperator;
	    }

	    public function GREATER_OR_EQUAL_OPERATOR1(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::GREATER_OR_EQUAL_OPERATOR1, 0);
	    }

	    public function GREATER_OR_EQUAL_OPERATOR2(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::GREATER_OR_EQUAL_OPERATOR2, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterGreaterOrEqualOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitGreaterOrEqualOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitGreaterOrEqualOperator($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class GreaterOperatorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_greaterOperator;
	    }

	    public function GREATER_OPERATOR1(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::GREATER_OPERATOR1, 0);
	    }

	    public function GREATER_OPERATOR2(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::GREATER_OPERATOR2, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterGreaterOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitGreaterOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitGreaterOperator($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LessOrEqualOperatorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_lessOrEqualOperator;
	    }

	    public function LESS_OR_EQUAL_OPERATOR1(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::LESS_OR_EQUAL_OPERATOR1, 0);
	    }

	    public function LESS_OR_EQUAL_OPERATOR2(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::LESS_OR_EQUAL_OPERATOR2, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterLessOrEqualOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitLessOrEqualOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitLessOrEqualOperator($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LessOperatorContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_lessOperator;
	    }

	    public function LESS_OPERATOR1(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::LESS_OPERATOR1, 0);
	    }

	    public function LESS_OPERATOR2(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::LESS_OPERATOR2, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterLessOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitLessOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitLessOperator($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IdentifierContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_identifier;
	    }

	    public function IDENTIFIER(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterIdentifier($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitIdentifier($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitIdentifier($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class UnsignedIntegerContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_unsignedInteger;
	    }

	    public function UNSIGNED_INTEGER(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::UNSIGNED_INTEGER, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterUnsignedInteger($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitUnsignedInteger($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitUnsignedInteger($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SignedIntegerContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_signedInteger;
	    }

	    public function SIGNED_INTEGER(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SIGNED_INTEGER, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterSignedInteger($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitSignedInteger($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitSignedInteger($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IntegerContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_integer;
	    }

	    public function signedInteger(): ?SignedIntegerContext
	    {
	    	return $this->getTypedRuleContext(SignedIntegerContext::class, 0);
	    }

	    public function unsignedInteger(): ?UnsignedIntegerContext
	    {
	    	return $this->getTypedRuleContext(UnsignedIntegerContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterInteger($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitInteger($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitInteger($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FloatContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_float;
	    }

	    public function FLOAT(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::FLOAT, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterFloat($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitFloat($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitFloat($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class StringContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return JsonPathParser::RULE_string;
	    }

	    public function SINGLE_QUOTED_STRING(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SINGLE_QUOTED_STRING, 0);
	    }

	    public function DOUBLE_QUOTED_STRING(): ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::DOUBLE_QUOTED_STRING, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterString($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitString($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitString($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}