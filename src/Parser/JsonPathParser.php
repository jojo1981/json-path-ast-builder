<?php

/*
 * Generated from ./resources/JsonPath.g4 by ANTLR 4.7.2
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
               KEYWORD_AND = 21, EQUAL_OPERATOR = 22, NOT_EQUAL_OPERATOR = 23, 
               GREATER_OPERATOR = 24, GREATER_OR_EQUAL_OPERATOR = 25, LESS_OPERATOR = 26, 
               LESS_OR_EQUAL_OPERATOR = 27, DOUBLE_QUOTED_STRING = 28, SINGLE_QUOTED_STRING = 29, 
               SIGNED_INTEGER = 30, UNSIGNED_INTEGER = 31, FLOAT = 32, IDENTIFIER = 33, 
               WS = 34;

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
		    null, "'.'", "'..'", "'*'", "'@'", "'$'", "','", "'''", "'\"'", "'['", 
		    "']'", "'('", "')'", "'?'", "':'", "'true'", "'false'", "'null'", 
		    "'or'", "'||'", "'&&'", "'and'", "'=='", "'!='", "'>'", "'>='", "'<'", 
		    "'<='"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "SINGLE_DOT", "DOUBLE_DOT", "ASTERISK", "AT_SIGN", "DOLLAR", 
		    "COMMA", "SINGLE_QUOTE", "DOUBLE_QUOTE", "SQUARE_BRACKET_OPEN", "SQUARE_BRACKET_CLOSE", 
		    "ROUND_BRACKET_OPEN", "ROUND_BRACKET_CLOSE", "QUESTION_MARK", "COLON", 
		    "KEYWORD_TRUE", "KEYWORD_FALSE", "KEYWORD_NULL", "KEYWORD_OR", "DOUBLE_PIPE", 
		    "DOUBLE_AMPERSAND", "KEYWORD_AND", "EQUAL_OPERATOR", "NOT_EQUAL_OPERATOR", 
		    "GREATER_OPERATOR", "GREATER_OR_EQUAL_OPERATOR", "LESS_OPERATOR", 
		    "LESS_OR_EQUAL_OPERATOR", "DOUBLE_QUOTED_STRING", "SINGLE_QUOTED_STRING", 
		    "SIGNED_INTEGER", "UNSIGNED_INTEGER", "FLOAT", "IDENTIFIER", "WS"
		];

		/**
		 * @var string
		 */
		private const SERIALIZED_ATN =
			"\u{3}\u{608B}\u{A72A}\u{8133}\u{B9ED}\u{417C}\u{3BE7}\u{7786}\u{5964}" .
		    "\u{3}\u{24}\u{130}\u{4}\u{2}\u{9}\u{2}\u{4}\u{3}\u{9}\u{3}\u{4}\u{4}" .
		    "\u{9}\u{4}\u{4}\u{5}\u{9}\u{5}\u{4}\u{6}\u{9}\u{6}\u{4}\u{7}\u{9}" .
		    "\u{7}\u{4}\u{8}\u{9}\u{8}\u{4}\u{9}\u{9}\u{9}\u{4}\u{A}\u{9}\u{A}" .
		    "\u{4}\u{B}\u{9}\u{B}\u{4}\u{C}\u{9}\u{C}\u{4}\u{D}\u{9}\u{D}\u{4}" .
		    "\u{E}\u{9}\u{E}\u{4}\u{F}\u{9}\u{F}\u{4}\u{10}\u{9}\u{10}\u{4}\u{11}" .
		    "\u{9}\u{11}\u{4}\u{12}\u{9}\u{12}\u{4}\u{13}\u{9}\u{13}\u{4}\u{14}" .
		    "\u{9}\u{14}\u{4}\u{15}\u{9}\u{15}\u{4}\u{16}\u{9}\u{16}\u{4}\u{17}" .
		    "\u{9}\u{17}\u{4}\u{18}\u{9}\u{18}\u{4}\u{19}\u{9}\u{19}\u{4}\u{1A}" .
		    "\u{9}\u{1A}\u{4}\u{1B}\u{9}\u{1B}\u{4}\u{1C}\u{9}\u{1C}\u{4}\u{1D}" .
		    "\u{9}\u{1D}\u{4}\u{1E}\u{9}\u{1E}\u{4}\u{1F}\u{9}\u{1F}\u{4}\u{20}" .
		    "\u{9}\u{20}\u{4}\u{21}\u{9}\u{21}\u{4}\u{22}\u{9}\u{22}\u{4}\u{23}" .
		    "\u{9}\u{23}\u{4}\u{24}\u{9}\u{24}\u{4}\u{25}\u{9}\u{25}\u{4}\u{26}" .
		    "\u{9}\u{26}\u{4}\u{27}\u{9}\u{27}\u{4}\u{28}\u{9}\u{28}\u{4}\u{29}" .
		    "\u{9}\u{29}\u{4}\u{2A}\u{9}\u{2A}\u{4}\u{2B}\u{9}\u{2B}\u{4}\u{2C}" .
		    "\u{9}\u{2C}\u{4}\u{2D}\u{9}\u{2D}\u{3}\u{2}\u{5}\u{2}\u{5C}\u{A}\u{2}" .
		    "\u{3}\u{2}\u{3}\u{2}\u{3}\u{3}\u{3}\u{3}\u{3}\u{4}\u{3}\u{4}\u{7}" .
		    "\u{4}\u{64}\u{A}\u{4}\u{C}\u{4}\u{E}\u{4}\u{67}\u{B}\u{4}\u{3}\u{5}" .
		    "\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}\u{5}\u{3}" .
		    "\u{6}\u{3}\u{6}\u{5}\u{6}\u{72}\u{A}\u{6}\u{3}\u{7}\u{3}\u{7}\u{3}" .
		    "\u{7}\u{3}\u{7}\u{3}\u{7}\u{3}\u{7}\u{5}\u{7}\u{7A}\u{A}\u{7}\u{3}" .
		    "\u{8}\u{3}\u{8}\u{3}\u{8}\u{3}\u{9}\u{3}\u{9}\u{5}\u{9}\u{81}\u{A}" .
		    "\u{9}\u{3}\u{9}\u{3}\u{9}\u{3}\u{A}\u{3}\u{A}\u{5}\u{A}\u{87}\u{A}" .
		    "\u{A}\u{3}\u{B}\u{3}\u{B}\u{3}\u{B}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}" .
		    "\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}" .
		    "\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{3}\u{C}\u{5}\u{C}" .
		    "\u{9B}\u{A}\u{C}\u{3}\u{D}\u{3}\u{D}\u{3}\u{D}\u{3}\u{D}\u{7}\u{D}" .
		    "\u{A1}\u{A}\u{D}\u{C}\u{D}\u{E}\u{D}\u{A4}\u{B}\u{D}\u{3}\u{D}\u{3}" .
		    "\u{D}\u{3}\u{E}\u{3}\u{E}\u{3}\u{E}\u{3}\u{E}\u{5}\u{E}\u{AC}\u{A}" .
		    "\u{E}\u{3}\u{E}\u{3}\u{E}\u{3}\u{F}\u{3}\u{F}\u{3}\u{10}\u{5}\u{10}" .
		    "\u{B3}\u{A}\u{10}\u{3}\u{10}\u{3}\u{10}\u{5}\u{10}\u{B7}\u{A}\u{10}" .
		    "\u{3}\u{10}\u{3}\u{10}\u{5}\u{10}\u{BB}\u{A}\u{10}\u{3}\u{11}\u{3}" .
		    "\u{11}\u{3}\u{11}\u{7}\u{11}\u{C0}\u{A}\u{11}\u{C}\u{11}\u{E}\u{11}" .
		    "\u{C3}\u{B}\u{11}\u{3}\u{12}\u{3}\u{12}\u{3}\u{12}\u{5}\u{12}\u{C8}" .
		    "\u{A}\u{12}\u{3}\u{13}\u{3}\u{13}\u{3}\u{13}\u{3}\u{13}\u{3}\u{13}" .
		    "\u{3}\u{13}\u{3}\u{13}\u{7}\u{13}\u{D1}\u{A}\u{13}\u{C}\u{13}\u{E}" .
		    "\u{13}\u{D4}\u{B}\u{13}\u{3}\u{14}\u{3}\u{14}\u{3}\u{14}\u{3}\u{14}" .
		    "\u{3}\u{14}\u{3}\u{14}\u{3}\u{14}\u{7}\u{14}\u{DD}\u{A}\u{14}\u{C}" .
		    "\u{14}\u{E}\u{14}\u{E0}\u{B}\u{14}\u{3}\u{15}\u{3}\u{15}\u{5}\u{15}" .
		    "\u{E4}\u{A}\u{15}\u{3}\u{16}\u{3}\u{16}\u{3}\u{16}\u{3}\u{16}\u{5}" .
		    "\u{16}\u{EA}\u{A}\u{16}\u{5}\u{16}\u{EC}\u{A}\u{16}\u{3}\u{17}\u{3}" .
		    "\u{17}\u{3}\u{17}\u{3}\u{17}\u{3}\u{18}\u{3}\u{18}\u{5}\u{18}\u{F4}" .
		    "\u{A}\u{18}\u{3}\u{18}\u{3}\u{18}\u{3}\u{19}\u{3}\u{19}\u{3}\u{1A}" .
		    "\u{3}\u{1A}\u{3}\u{1A}\u{3}\u{1A}\u{5}\u{1A}\u{FE}\u{A}\u{1A}\u{3}" .
		    "\u{1B}\u{3}\u{1B}\u{3}\u{1C}\u{3}\u{1C}\u{5}\u{1C}\u{104}\u{A}\u{1C}" .
		    "\u{3}\u{1D}\u{3}\u{1D}\u{3}\u{1E}\u{3}\u{1E}\u{3}\u{1F}\u{3}\u{1F}" .
		    "\u{3}\u{20}\u{3}\u{20}\u{3}\u{21}\u{3}\u{21}\u{3}\u{21}\u{3}\u{21}" .
		    "\u{3}\u{21}\u{3}\u{21}\u{5}\u{21}\u{114}\u{A}\u{21}\u{3}\u{22}\u{3}" .
		    "\u{22}\u{3}\u{23}\u{3}\u{23}\u{3}\u{24}\u{3}\u{24}\u{3}\u{25}\u{3}" .
		    "\u{25}\u{3}\u{26}\u{3}\u{26}\u{3}\u{27}\u{3}\u{27}\u{3}\u{28}\u{3}" .
		    "\u{28}\u{3}\u{29}\u{3}\u{29}\u{3}\u{2A}\u{3}\u{2A}\u{3}\u{2B}\u{3}" .
		    "\u{2B}\u{5}\u{2B}\u{12A}\u{A}\u{2B}\u{3}\u{2C}\u{3}\u{2C}\u{3}\u{2D}" .
		    "\u{3}\u{2D}\u{3}\u{2D}\u{2}\u{4}\u{24}\u{26}\u{2E}\u{2}\u{4}\u{6}" .
		    "\u{8}\u{A}\u{C}\u{E}\u{10}\u{12}\u{14}\u{16}\u{18}\u{1A}\u{1C}\u{1E}" .
		    "\u{20}\u{22}\u{24}\u{26}\u{28}\u{2A}\u{2C}\u{2E}\u{30}\u{32}\u{34}" .
		    "\u{36}\u{38}\u{3A}\u{3C}\u{3E}\u{40}\u{42}\u{44}\u{46}\u{48}\u{4A}" .
		    "\u{4C}\u{4E}\u{50}\u{52}\u{54}\u{56}\u{58}\u{2}\u{6}\u{3}\u{2}\u{11}" .
		    "\u{12}\u{3}\u{2}\u{16}\u{17}\u{3}\u{2}\u{14}\u{15}\u{3}\u{2}\u{1E}" .
		    "\u{1F}\u{2}\u{12A}\u{2}\u{5B}\u{3}\u{2}\u{2}\u{2}\u{4}\u{5F}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{6}\u{65}\u{3}\u{2}\u{2}\u{2}\u{8}\u{68}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{A}\u{71}\u{3}\u{2}\u{2}\u{2}\u{C}\u{79}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{E}\u{7B}\u{3}\u{2}\u{2}\u{2}\u{10}\u{7E}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{12}\u{84}\u{3}\u{2}\u{2}\u{2}\u{14}\u{88}\u{3}\u{2}\u{2}\u{2}\u{16}" .
		    "\u{9A}\u{3}\u{2}\u{2}\u{2}\u{18}\u{9C}\u{3}\u{2}\u{2}\u{2}\u{1A}\u{A7}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{1C}\u{AF}\u{3}\u{2}\u{2}\u{2}\u{1E}\u{B2}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{20}\u{BC}\u{3}\u{2}\u{2}\u{2}\u{22}\u{C7}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{24}\u{C9}\u{3}\u{2}\u{2}\u{2}\u{26}\u{D5}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{28}\u{E3}\u{3}\u{2}\u{2}\u{2}\u{2A}\u{E5}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{2C}\u{ED}\u{3}\u{2}\u{2}\u{2}\u{2E}\u{F3}\u{3}\u{2}\u{2}\u{2}\u{30}" .
		    "\u{F7}\u{3}\u{2}\u{2}\u{2}\u{32}\u{FD}\u{3}\u{2}\u{2}\u{2}\u{34}\u{FF}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{36}\u{103}\u{3}\u{2}\u{2}\u{2}\u{38}\u{105}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{3A}\u{107}\u{3}\u{2}\u{2}\u{2}\u{3C}\u{109}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{3E}\u{10B}\u{3}\u{2}\u{2}\u{2}\u{40}\u{113}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{42}\u{115}\u{3}\u{2}\u{2}\u{2}\u{44}\u{117}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{46}\u{119}\u{3}\u{2}\u{2}\u{2}\u{48}\u{11B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{4A}\u{11D}\u{3}\u{2}\u{2}\u{2}\u{4C}\u{11F}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{4E}\u{121}\u{3}\u{2}\u{2}\u{2}\u{50}\u{123}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{52}\u{125}\u{3}\u{2}\u{2}\u{2}\u{54}\u{129}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{56}\u{12B}\u{3}\u{2}\u{2}\u{2}\u{58}\u{12D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{5A}\u{5C}\u{5}\u{4}\u{3}\u{2}\u{5B}\u{5A}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{5B}\u{5C}\u{3}\u{2}\u{2}\u{2}\u{5C}\u{5D}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{5D}\u{5E}\u{5}\u{6}\u{4}\u{2}\u{5E}\u{3}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{5F}\u{60}\u{7}\u{7}\u{2}\u{2}\u{60}\u{5}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{61}\u{64}\u{5}\u{A}\u{6}\u{2}\u{62}\u{64}\u{5}\u{8}\u{5}\u{2}\u{63}" .
		    "\u{61}\u{3}\u{2}\u{2}\u{2}\u{63}\u{62}\u{3}\u{2}\u{2}\u{2}\u{64}\u{67}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{65}\u{63}\u{3}\u{2}\u{2}\u{2}\u{65}\u{66}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{66}\u{7}\u{3}\u{2}\u{2}\u{2}\u{67}\u{65}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{68}\u{69}\u{7}\u{B}\u{2}\u{2}\u{69}\u{6A}\u{7}\u{F}\u{2}" .
		    "\u{2}\u{6A}\u{6B}\u{7}\u{D}\u{2}\u{2}\u{6B}\u{6C}\u{5}\u{22}\u{12}" .
		    "\u{2}\u{6C}\u{6D}\u{7}\u{E}\u{2}\u{2}\u{6D}\u{6E}\u{7}\u{C}\u{2}\u{2}" .
		    "\u{6E}\u{9}\u{3}\u{2}\u{2}\u{2}\u{6F}\u{72}\u{5}\u{C}\u{7}\u{2}\u{70}" .
		    "\u{72}\u{5}\u{1A}\u{E}\u{2}\u{71}\u{6F}\u{3}\u{2}\u{2}\u{2}\u{71}" .
		    "\u{70}\u{3}\u{2}\u{2}\u{2}\u{72}\u{B}\u{3}\u{2}\u{2}\u{2}\u{73}\u{7A}" .
		    "\u{5}\u{E}\u{8}\u{2}\u{74}\u{7A}\u{5}\u{10}\u{9}\u{2}\u{75}\u{7A}" .
		    "\u{5}\u{12}\u{A}\u{2}\u{76}\u{7A}\u{5}\u{14}\u{B}\u{2}\u{77}\u{7A}" .
		    "\u{5}\u{16}\u{C}\u{2}\u{78}\u{7A}\u{5}\u{18}\u{D}\u{2}\u{79}\u{73}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{79}\u{74}\u{3}\u{2}\u{2}\u{2}\u{79}\u{75}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{79}\u{76}\u{3}\u{2}\u{2}\u{2}\u{79}\u{77}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{79}\u{78}\u{3}\u{2}\u{2}\u{2}\u{7A}\u{D}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{7B}\u{7C}\u{7}\u{3}\u{2}\u{2}\u{7C}\u{7D}\u{5}\u{4E}\u{28}" .
		    "\u{2}\u{7D}\u{F}\u{3}\u{2}\u{2}\u{2}\u{7E}\u{80}\u{7}\u{4}\u{2}\u{2}" .
		    "\u{7F}\u{81}\u{7}\u{5}\u{2}\u{2}\u{80}\u{7F}\u{3}\u{2}\u{2}\u{2}\u{80}" .
		    "\u{81}\u{3}\u{2}\u{2}\u{2}\u{81}\u{82}\u{3}\u{2}\u{2}\u{2}\u{82}\u{83}" .
		    "\u{5}\u{8}\u{5}\u{2}\u{83}\u{11}\u{3}\u{2}\u{2}\u{2}\u{84}\u{86}\u{7}" .
		    "\u{4}\u{2}\u{2}\u{85}\u{87}\u{7}\u{5}\u{2}\u{2}\u{86}\u{85}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{86}\u{87}\u{3}\u{2}\u{2}\u{2}\u{87}\u{13}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{88}\u{89}\u{7}\u{4}\u{2}\u{2}\u{89}\u{8A}\u{5}\u{4E}\u{28}" .
		    "\u{2}\u{8A}\u{15}\u{3}\u{2}\u{2}\u{2}\u{8B}\u{8C}\u{7}\u{3}\u{2}\u{2}" .
		    "\u{8C}\u{9B}\u{7}\u{5}\u{2}\u{2}\u{8D}\u{8E}\u{7}\u{B}\u{2}\u{2}\u{8E}" .
		    "\u{8F}\u{7}\u{5}\u{2}\u{2}\u{8F}\u{9B}\u{7}\u{C}\u{2}\u{2}\u{90}\u{91}" .
		    "\u{7}\u{B}\u{2}\u{2}\u{91}\u{92}\u{7}\u{9}\u{2}\u{2}\u{92}\u{93}\u{7}" .
		    "\u{5}\u{2}\u{2}\u{93}\u{94}\u{7}\u{9}\u{2}\u{2}\u{94}\u{9B}\u{7}\u{C}" .
		    "\u{2}\u{2}\u{95}\u{96}\u{7}\u{B}\u{2}\u{2}\u{96}\u{97}\u{7}\u{A}\u{2}" .
		    "\u{2}\u{97}\u{98}\u{7}\u{5}\u{2}\u{2}\u{98}\u{99}\u{7}\u{A}\u{2}\u{2}" .
		    "\u{99}\u{9B}\u{7}\u{C}\u{2}\u{2}\u{9A}\u{8B}\u{3}\u{2}\u{2}\u{2}\u{9A}" .
		    "\u{8D}\u{3}\u{2}\u{2}\u{2}\u{9A}\u{90}\u{3}\u{2}\u{2}\u{2}\u{9A}\u{95}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{9B}\u{17}\u{3}\u{2}\u{2}\u{2}\u{9C}\u{9D}\u{7}" .
		    "\u{B}\u{2}\u{2}\u{9D}\u{A2}\u{5}\u{58}\u{2D}\u{2}\u{9E}\u{9F}\u{7}" .
		    "\u{8}\u{2}\u{2}\u{9F}\u{A1}\u{5}\u{58}\u{2D}\u{2}\u{A0}\u{9E}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{A1}\u{A4}\u{3}\u{2}\u{2}\u{2}\u{A2}\u{A0}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{A2}\u{A3}\u{3}\u{2}\u{2}\u{2}\u{A3}\u{A5}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{A4}\u{A2}\u{3}\u{2}\u{2}\u{2}\u{A5}\u{A6}\u{7}\u{C}\u{2}\u{2}" .
		    "\u{A6}\u{19}\u{3}\u{2}\u{2}\u{2}\u{A7}\u{AB}\u{7}\u{B}\u{2}\u{2}\u{A8}" .
		    "\u{AC}\u{5}\u{1C}\u{F}\u{2}\u{A9}\u{AC}\u{5}\u{1E}\u{10}\u{2}\u{AA}" .
		    "\u{AC}\u{5}\u{20}\u{11}\u{2}\u{AB}\u{A8}\u{3}\u{2}\u{2}\u{2}\u{AB}" .
		    "\u{A9}\u{3}\u{2}\u{2}\u{2}\u{AB}\u{AA}\u{3}\u{2}\u{2}\u{2}\u{AC}\u{AD}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{AD}\u{AE}\u{7}\u{C}\u{2}\u{2}\u{AE}\u{1B}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{AF}\u{B0}\u{7}\u{5}\u{2}\u{2}\u{B0}\u{1D}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{B1}\u{B3}\u{5}\u{54}\u{2B}\u{2}\u{B2}\u{B1}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{B2}\u{B3}\u{3}\u{2}\u{2}\u{2}\u{B3}\u{B4}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{B4}\u{B6}\u{7}\u{10}\u{2}\u{2}\u{B5}\u{B7}\u{5}\u{54}\u{2B}" .
		    "\u{2}\u{B6}\u{B5}\u{3}\u{2}\u{2}\u{2}\u{B6}\u{B7}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{B7}\u{BA}\u{3}\u{2}\u{2}\u{2}\u{B8}\u{B9}\u{7}\u{10}\u{2}\u{2}" .
		    "\u{B9}\u{BB}\u{5}\u{50}\u{29}\u{2}\u{BA}\u{B8}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{BA}\u{BB}\u{3}\u{2}\u{2}\u{2}\u{BB}\u{1F}\u{3}\u{2}\u{2}\u{2}\u{BC}" .
		    "\u{C1}\u{5}\u{50}\u{29}\u{2}\u{BD}\u{BE}\u{7}\u{8}\u{2}\u{2}\u{BE}" .
		    "\u{C0}\u{5}\u{50}\u{29}\u{2}\u{BF}\u{BD}\u{3}\u{2}\u{2}\u{2}\u{C0}" .
		    "\u{C3}\u{3}\u{2}\u{2}\u{2}\u{C1}\u{BF}\u{3}\u{2}\u{2}\u{2}\u{C1}\u{C2}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{C2}\u{21}\u{3}\u{2}\u{2}\u{2}\u{C3}\u{C1}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{C4}\u{C8}\u{5}\u{24}\u{13}\u{2}\u{C5}\u{C8}\u{5}" .
		    "\u{26}\u{14}\u{2}\u{C6}\u{C8}\u{5}\u{28}\u{15}\u{2}\u{C7}\u{C4}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{C7}\u{C5}\u{3}\u{2}\u{2}\u{2}\u{C7}\u{C6}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{C8}\u{23}\u{3}\u{2}\u{2}\u{2}\u{C9}\u{CA}\u{8}\u{13}" .
		    "\u{1}\u{2}\u{CA}\u{CB}\u{5}\u{28}\u{15}\u{2}\u{CB}\u{D2}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{CC}\u{CD}\u{C}\u{4}\u{2}\u{2}\u{CD}\u{CE}\u{5}\u{3C}" .
		    "\u{1F}\u{2}\u{CE}\u{CF}\u{5}\u{24}\u{13}\u{5}\u{CF}\u{D1}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{D0}\u{CC}\u{3}\u{2}\u{2}\u{2}\u{D1}\u{D4}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{D2}\u{D0}\u{3}\u{2}\u{2}\u{2}\u{D2}\u{D3}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{D3}\u{25}\u{3}\u{2}\u{2}\u{2}\u{D4}\u{D2}\u{3}\u{2}\u{2}\u{2}\u{D5}" .
		    "\u{D6}\u{8}\u{14}\u{1}\u{2}\u{D6}\u{D7}\u{5}\u{28}\u{15}\u{2}\u{D7}" .
		    "\u{DE}\u{3}\u{2}\u{2}\u{2}\u{D8}\u{D9}\u{C}\u{4}\u{2}\u{2}\u{D9}\u{DA}" .
		    "\u{5}\u{3E}\u{20}\u{2}\u{DA}\u{DB}\u{5}\u{26}\u{14}\u{5}\u{DB}\u{DD}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{DC}\u{D8}\u{3}\u{2}\u{2}\u{2}\u{DD}\u{E0}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{DE}\u{DC}\u{3}\u{2}\u{2}\u{2}\u{DE}\u{DF}\u{3}\u{2}" .
		    "\u{2}\u{2}\u{DF}\u{27}\u{3}\u{2}\u{2}\u{2}\u{E0}\u{DE}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{E1}\u{E4}\u{5}\u{2A}\u{16}\u{2}\u{E2}\u{E4}\u{5}\u{2C}\u{17}" .
		    "\u{2}\u{E3}\u{E1}\u{3}\u{2}\u{2}\u{2}\u{E3}\u{E2}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{E4}\u{29}\u{3}\u{2}\u{2}\u{2}\u{E5}\u{EB}\u{5}\u{2E}\u{18}\u{2}" .
		    "\u{E6}\u{E9}\u{5}\u{40}\u{21}\u{2}\u{E7}\u{EA}\u{5}\u{2E}\u{18}\u{2}" .
		    "\u{E8}\u{EA}\u{5}\u{32}\u{1A}\u{2}\u{E9}\u{E7}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{E9}\u{E8}\u{3}\u{2}\u{2}\u{2}\u{EA}\u{EC}\u{3}\u{2}\u{2}\u{2}\u{EB}" .
		    "\u{E6}\u{3}\u{2}\u{2}\u{2}\u{EB}\u{EC}\u{3}\u{2}\u{2}\u{2}\u{EC}\u{2B}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{ED}\u{EE}\u{5}\u{32}\u{1A}\u{2}\u{EE}\u{EF}" .
		    "\u{5}\u{40}\u{21}\u{2}\u{EF}\u{F0}\u{5}\u{2E}\u{18}\u{2}\u{F0}\u{2D}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{F1}\u{F4}\u{5}\u{30}\u{19}\u{2}\u{F2}\u{F4}" .
		    "\u{5}\u{4}\u{3}\u{2}\u{F3}\u{F1}\u{3}\u{2}\u{2}\u{2}\u{F3}\u{F2}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{F4}\u{F5}\u{3}\u{2}\u{2}\u{2}\u{F5}\u{F6}\u{5}\u{6}" .
		    "\u{4}\u{2}\u{F6}\u{2F}\u{3}\u{2}\u{2}\u{2}\u{F7}\u{F8}\u{7}\u{6}\u{2}" .
		    "\u{2}\u{F8}\u{31}\u{3}\u{2}\u{2}\u{2}\u{F9}\u{FE}\u{5}\u{38}\u{1D}" .
		    "\u{2}\u{FA}\u{FE}\u{5}\u{36}\u{1C}\u{2}\u{FB}\u{FE}\u{5}\u{3A}\u{1E}" .
		    "\u{2}\u{FC}\u{FE}\u{5}\u{34}\u{1B}\u{2}\u{FD}\u{F9}\u{3}\u{2}\u{2}" .
		    "\u{2}\u{FD}\u{FA}\u{3}\u{2}\u{2}\u{2}\u{FD}\u{FB}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{FD}\u{FC}\u{3}\u{2}\u{2}\u{2}\u{FE}\u{33}\u{3}\u{2}\u{2}\u{2}\u{FF}" .
		    "\u{100}\u{5}\u{58}\u{2D}\u{2}\u{100}\u{35}\u{3}\u{2}\u{2}\u{2}\u{101}" .
		    "\u{104}\u{5}\u{54}\u{2B}\u{2}\u{102}\u{104}\u{5}\u{56}\u{2C}\u{2}" .
		    "\u{103}\u{101}\u{3}\u{2}\u{2}\u{2}\u{103}\u{102}\u{3}\u{2}\u{2}\u{2}" .
		    "\u{104}\u{37}\u{3}\u{2}\u{2}\u{2}\u{105}\u{106}\u{9}\u{2}\u{2}\u{2}" .
		    "\u{106}\u{39}\u{3}\u{2}\u{2}\u{2}\u{107}\u{108}\u{7}\u{13}\u{2}\u{2}" .
		    "\u{108}\u{3B}\u{3}\u{2}\u{2}\u{2}\u{109}\u{10A}\u{9}\u{3}\u{2}\u{2}" .
		    "\u{10A}\u{3D}\u{3}\u{2}\u{2}\u{2}\u{10B}\u{10C}\u{9}\u{4}\u{2}\u{2}" .
		    "\u{10C}\u{3F}\u{3}\u{2}\u{2}\u{2}\u{10D}\u{114}\u{5}\u{42}\u{22}\u{2}" .
		    "\u{10E}\u{114}\u{5}\u{44}\u{23}\u{2}\u{10F}\u{114}\u{5}\u{46}\u{24}" .
		    "\u{2}\u{110}\u{114}\u{5}\u{48}\u{25}\u{2}\u{111}\u{114}\u{5}\u{4A}" .
		    "\u{26}\u{2}\u{112}\u{114}\u{5}\u{4C}\u{27}\u{2}\u{113}\u{10D}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{113}\u{10E}\u{3}\u{2}\u{2}\u{2}\u{113}\u{10F}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{113}\u{110}\u{3}\u{2}\u{2}\u{2}\u{113}\u{111}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{113}\u{112}\u{3}\u{2}\u{2}\u{2}\u{114}\u{41}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{115}\u{116}\u{7}\u{18}\u{2}\u{2}\u{116}\u{43}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{117}\u{118}\u{7}\u{19}\u{2}\u{2}\u{118}\u{45}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{119}\u{11A}\u{7}\u{1B}\u{2}\u{2}\u{11A}\u{47}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{11B}\u{11C}\u{7}\u{1A}\u{2}\u{2}\u{11C}\u{49}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{11D}\u{11E}\u{7}\u{1D}\u{2}\u{2}\u{11E}\u{4B}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{11F}\u{120}\u{7}\u{1C}\u{2}\u{2}\u{120}\u{4D}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{121}\u{122}\u{7}\u{23}\u{2}\u{2}\u{122}\u{4F}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{123}\u{124}\u{7}\u{21}\u{2}\u{2}\u{124}\u{51}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{125}\u{126}\u{7}\u{20}\u{2}\u{2}\u{126}\u{53}\u{3}" .
		    "\u{2}\u{2}\u{2}\u{127}\u{12A}\u{5}\u{52}\u{2A}\u{2}\u{128}\u{12A}" .
		    "\u{5}\u{50}\u{29}\u{2}\u{129}\u{127}\u{3}\u{2}\u{2}\u{2}\u{129}\u{128}" .
		    "\u{3}\u{2}\u{2}\u{2}\u{12A}\u{55}\u{3}\u{2}\u{2}\u{2}\u{12B}\u{12C}" .
		    "\u{7}\u{22}\u{2}\u{2}\u{12C}\u{57}\u{3}\u{2}\u{2}\u{2}\u{12D}\u{12E}" .
		    "\u{9}\u{5}\u{2}\u{2}\u{12E}\u{59}\u{3}\u{2}\u{2}\u{2}\u{1B}\u{5B}" .
		    "\u{63}\u{65}\u{71}\u{79}\u{80}\u{86}\u{9A}\u{A2}\u{AB}\u{B2}\u{B6}" .
		    "\u{BA}\u{C1}\u{C7}\u{D2}\u{DE}\u{E3}\u{E9}\u{EB}\u{F3}\u{FD}\u{103}" .
		    "\u{113}\u{129}";

		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize() : void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.7.2', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName() : string
		{
			return "JsonPath.g4";
		}

		public function getRuleNames() : array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN() : string
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN() : ATN
		{
			return self::$atn;
		}

		public function getVocabulary() : Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function path() : Context\PathContext
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
		public function root() : Context\RootContext
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
		public function pathSequence() : Context\PathSequenceContext
		{
		    $localContext = new Context\PathSequenceContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_pathSequence);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(99);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
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
		        	}

		        	$this->setState(101);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 2, $this->ctx);
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
		public function subscriptFilter() : Context\SubscriptFilterContext
		{
		    $localContext = new Context\SubscriptFilterContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_subscriptFilter);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(102);
		        $this->match(self::SQUARE_BRACKET_OPEN);
		        $this->setState(103);
		        $this->match(self::QUESTION_MARK);
		        $this->setState(104);
		        $this->match(self::ROUND_BRACKET_OPEN);
		        $this->setState(105);
		        $this->booleanExpression();
		        $this->setState(106);
		        $this->match(self::ROUND_BRACKET_CLOSE);
		        $this->setState(107);
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
		public function childAccess() : Context\ChildAccessContext
		{
		    $localContext = new Context\ChildAccessContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_childAccess);

		    try {
		        $this->setState(111);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 3, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(109);
		        	    $this->fieldAccessor();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(110);
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
		public function fieldAccessor() : Context\FieldAccessorContext
		{
		    $localContext = new Context\FieldAccessorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_fieldAccessor);

		    try {
		        $this->setState(119);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 4, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(113);
		        	    $this->dotField();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(114);
		        	    $this->recursiveSubscriptFilter();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(115);
		        	    $this->recursiveAny();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(116);
		        	    $this->recursiveField();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(117);
		        	    $this->anyChild();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(118);
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
		public function dotField() : Context\DotFieldContext
		{
		    $localContext = new Context\DotFieldContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_dotField);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(121);
		        $this->match(self::SINGLE_DOT);
		        $this->setState(122);
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
		public function recursiveSubscriptFilter() : Context\RecursiveSubscriptFilterContext
		{
		    $localContext = new Context\RecursiveSubscriptFilterContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_recursiveSubscriptFilter);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(124);
		        $this->match(self::DOUBLE_DOT);
		        $this->setState(126);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ASTERISK) {
		        	$this->setState(125);
		        	$this->match(self::ASTERISK);
		        }
		        $this->setState(128);
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
		public function recursiveAny() : Context\RecursiveAnyContext
		{
		    $localContext = new Context\RecursiveAnyContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_recursiveAny);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(130);
		        $this->match(self::DOUBLE_DOT);
		        $this->setState(132);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 6, $this->ctx)) {
		            case 1:
		        	    $this->setState(131);
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
		public function recursiveField() : Context\RecursiveFieldContext
		{
		    $localContext = new Context\RecursiveFieldContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_recursiveField);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(134);
		        $this->match(self::DOUBLE_DOT);
		        $this->setState(135);
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
		public function anyChild() : Context\AnyChildContext
		{
		    $localContext = new Context\AnyChildContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_anyChild);

		    try {
		        $this->setState(152);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 7, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(137);
		        	    $this->match(self::SINGLE_DOT);
		        	    $this->setState(138);
		        	    $this->match(self::ASTERISK);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(139);
		        	    $this->match(self::SQUARE_BRACKET_OPEN);
		        	    $this->setState(140);
		        	    $this->match(self::ASTERISK);
		        	    $this->setState(141);
		        	    $this->match(self::SQUARE_BRACKET_CLOSE);
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(142);
		        	    $this->match(self::SQUARE_BRACKET_OPEN);
		        	    $this->setState(143);
		        	    $this->match(self::SINGLE_QUOTE);
		        	    $this->setState(144);
		        	    $this->match(self::ASTERISK);
		        	    $this->setState(145);
		        	    $this->match(self::SINGLE_QUOTE);
		        	    $this->setState(146);
		        	    $this->match(self::SQUARE_BRACKET_CLOSE);
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(147);
		        	    $this->match(self::SQUARE_BRACKET_OPEN);
		        	    $this->setState(148);
		        	    $this->match(self::DOUBLE_QUOTE);
		        	    $this->setState(149);
		        	    $this->match(self::ASTERISK);
		        	    $this->setState(150);
		        	    $this->match(self::DOUBLE_QUOTE);
		        	    $this->setState(151);
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
		public function subscriptField() : Context\SubscriptFieldContext
		{
		    $localContext = new Context\SubscriptFieldContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_subscriptField);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(154);
		        $this->match(self::SQUARE_BRACKET_OPEN);
		        $this->setState(155);
		        $this->string();
		        $this->setState(160);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(156);
		        	$this->match(self::COMMA);
		        	$this->setState(157);
		        	$this->string();
		        	$this->setState(162);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(163);
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
		public function arrayAccessor() : Context\ArrayAccessorContext
		{
		    $localContext = new Context\ArrayAccessorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_arrayAccessor);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(165);
		        $this->match(self::SQUARE_BRACKET_OPEN);
		        $this->setState(169);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 9, $this->ctx)) {
		        	case 1:
		        	    $this->setState(166);
		        	    $this->arrayAll();
		        	break;

		        	case 2:
		        	    $this->setState(167);
		        	    $this->arraySlice();
		        	break;

		        	case 3:
		        	    $this->setState(168);
		        	    $this->arrayRandomAccess();
		        	break;
		        }
		        $this->setState(171);
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
		public function arrayAll() : Context\ArrayAllContext
		{
		    $localContext = new Context\ArrayAllContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_arrayAll);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(173);
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
		public function arraySlice() : Context\ArraySliceContext
		{
		    $localContext = new Context\ArraySliceContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_arraySlice);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(176);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::SIGNED_INTEGER || $_la === self::UNSIGNED_INTEGER) {
		        	$this->setState(175);
		        	$this->integer();
		        }
		        $this->setState(178);
		        $this->match(self::COLON);
		        $this->setState(180);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::SIGNED_INTEGER || $_la === self::UNSIGNED_INTEGER) {
		        	$this->setState(179);
		        	$this->integer();
		        }
		        $this->setState(184);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::COLON) {
		        	$this->setState(182);
		        	$this->match(self::COLON);
		        	$this->setState(183);
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
		public function arrayRandomAccess() : Context\ArrayRandomAccessContext
		{
		    $localContext = new Context\ArrayRandomAccessContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_arrayRandomAccess);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(186);
		        $this->unsignedInteger();
		        $this->setState(191);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(187);
		        	$this->match(self::COMMA);
		        	$this->setState(188);
		        	$this->unsignedInteger();
		        	$this->setState(193);
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
		public function booleanExpression() : Context\BooleanExpressionContext
		{
		    $localContext = new Context\BooleanExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_booleanExpression);

		    try {
		        $this->setState(197);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 14, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(194);
		        	    $this->recursiveAndExpression(0);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(195);
		        	    $this->recursiveOrExpression(0);
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(196);
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
		public function andExpression() : Context\AndExpressionContext
		{
			return $this->recursiveAndExpression(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveAndExpression(int $precedence) : Context\AndExpressionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\AndExpressionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 34;
			$this->enterRecursionRule($localContext, 34, self::RULE_andExpression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(200);
				$this->expression();
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(208);
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
						$this->setState(202);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(203);
						$this->andOperator();
						$this->setState(204);
						$this->recursiveAndExpression(3); 
					}

					$this->setState(210);
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
		public function orExpression() : Context\OrExpressionContext
		{
			return $this->recursiveOrExpression(0);
		}

		/**
		 * @throws RecognitionException
		 */
		private function recursiveOrExpression(int $precedence) : Context\OrExpressionContext
		{
			$parentContext = $this->ctx;
			$parentState = $this->getState();
			$localContext = new Context\OrExpressionContext($this->ctx, $parentState);
			$previousContext = $localContext;
			$startState = 36;
			$this->enterRecursionRule($localContext, 36, self::RULE_orExpression, $precedence);

			try {
				$this->enterOuterAlt($localContext, 1);
				$this->setState(212);
				$this->expression();
				$this->ctx->stop = $this->input->LT(-1);
				$this->setState(220);
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
						$this->setState(214);

						if (!($this->precpred($this->ctx, 2))) {
						    throw new FailedPredicateException($this, "\\\$this->precpred(\\\$this->ctx, 2)");
						}
						$this->setState(215);
						$this->orOperator();
						$this->setState(216);
						$this->recursiveOrExpression(3); 
					}

					$this->setState(222);
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
		public function expression() : Context\ExpressionContext
		{
		    $localContext = new Context\ExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_expression);

		    try {
		        $this->setState(225);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::AT_SIGN:
		            case self::DOLLAR:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(223);
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
		            	$this->setState(224);
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
		public function expression1() : Context\Expression1Context
		{
		    $localContext = new Context\Expression1Context($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_expression1);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(227);
		        $this->subQuery();
		        $this->setState(233);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 19, $this->ctx)) {
		            case 1:
		        	    $this->setState(228);
		        	    $this->comparisonOperator();
		        	    $this->setState(231);
		        	    $this->errorHandler->sync($this);

		        	    switch ($this->input->LA(1)) {
		        	        case self::AT_SIGN:
		        	        case self::DOLLAR:
		        	        	$this->setState(229);
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
		        	        	$this->setState(230);
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
		public function expression2() : Context\Expression2Context
		{
		    $localContext = new Context\Expression2Context($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_expression2);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(235);
		        $this->value();
		        $this->setState(236);
		        $this->comparisonOperator();
		        $this->setState(237);
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
		public function subQuery() : Context\SubQueryContext
		{
		    $localContext = new Context\SubQueryContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_subQuery);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(241);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::AT_SIGN:
		            	$this->setState(239);
		            	$this->current();
		            	break;

		            case self::DOLLAR:
		            	$this->setState(240);
		            	$this->root();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		        $this->setState(243);
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
		public function current() : Context\CurrentContext
		{
		    $localContext = new Context\CurrentContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_current);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(245);
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
		public function value() : Context\ValueContext
		{
		    $localContext = new Context\ValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_value);

		    try {
		        $this->setState(251);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::KEYWORD_TRUE:
		            case self::KEYWORD_FALSE:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(247);
		            	$this->booleanValue();
		            	break;

		            case self::SIGNED_INTEGER:
		            case self::UNSIGNED_INTEGER:
		            case self::FLOAT:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(248);
		            	$this->numberValue();
		            	break;

		            case self::KEYWORD_NULL:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(249);
		            	$this->nullValue();
		            	break;

		            case self::DOUBLE_QUOTED_STRING:
		            case self::SINGLE_QUOTED_STRING:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(250);
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
		public function stringValue() : Context\StringValueContext
		{
		    $localContext = new Context\StringValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 50, self::RULE_stringValue);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(253);
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
		public function numberValue() : Context\NumberValueContext
		{
		    $localContext = new Context\NumberValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_numberValue);

		    try {
		        $this->setState(257);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::SIGNED_INTEGER:
		            case self::UNSIGNED_INTEGER:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(255);
		            	$this->integer();
		            	break;

		            case self::FLOAT:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(256);
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
		public function booleanValue() : Context\BooleanValueContext
		{
		    $localContext = new Context\BooleanValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_booleanValue);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(259);

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
		public function nullValue() : Context\NullValueContext
		{
		    $localContext = new Context\NullValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 56, self::RULE_nullValue);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(261);
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
		public function andOperator() : Context\AndOperatorContext
		{
		    $localContext = new Context\AndOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 58, self::RULE_andOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(263);

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
		public function orOperator() : Context\OrOperatorContext
		{
		    $localContext = new Context\OrOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_orOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(265);

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
		public function comparisonOperator() : Context\ComparisonOperatorContext
		{
		    $localContext = new Context\ComparisonOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 62, self::RULE_comparisonOperator);

		    try {
		        $this->setState(273);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::EQUAL_OPERATOR:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(267);
		            	$this->equalOperator();
		            	break;

		            case self::NOT_EQUAL_OPERATOR:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(268);
		            	$this->notEqualOperator();
		            	break;

		            case self::GREATER_OR_EQUAL_OPERATOR:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(269);
		            	$this->greaterOrEqualOperator();
		            	break;

		            case self::GREATER_OPERATOR:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(270);
		            	$this->greaterOperator();
		            	break;

		            case self::LESS_OR_EQUAL_OPERATOR:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(271);
		            	$this->lessOrEqualOperator();
		            	break;

		            case self::LESS_OPERATOR:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(272);
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
		public function equalOperator() : Context\EqualOperatorContext
		{
		    $localContext = new Context\EqualOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 64, self::RULE_equalOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(275);
		        $this->match(self::EQUAL_OPERATOR);
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
		public function notEqualOperator() : Context\NotEqualOperatorContext
		{
		    $localContext = new Context\NotEqualOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 66, self::RULE_notEqualOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(277);
		        $this->match(self::NOT_EQUAL_OPERATOR);
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
		public function greaterOrEqualOperator() : Context\GreaterOrEqualOperatorContext
		{
		    $localContext = new Context\GreaterOrEqualOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 68, self::RULE_greaterOrEqualOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(279);
		        $this->match(self::GREATER_OR_EQUAL_OPERATOR);
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
		public function greaterOperator() : Context\GreaterOperatorContext
		{
		    $localContext = new Context\GreaterOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 70, self::RULE_greaterOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(281);
		        $this->match(self::GREATER_OPERATOR);
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
		public function lessOrEqualOperator() : Context\LessOrEqualOperatorContext
		{
		    $localContext = new Context\LessOrEqualOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 72, self::RULE_lessOrEqualOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(283);
		        $this->match(self::LESS_OR_EQUAL_OPERATOR);
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
		public function lessOperator() : Context\LessOperatorContext
		{
		    $localContext = new Context\LessOperatorContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 74, self::RULE_lessOperator);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(285);
		        $this->match(self::LESS_OPERATOR);
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
		public function identifier() : Context\IdentifierContext
		{
		    $localContext = new Context\IdentifierContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 76, self::RULE_identifier);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(287);
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
		public function unsignedInteger() : Context\UnsignedIntegerContext
		{
		    $localContext = new Context\UnsignedIntegerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 78, self::RULE_unsignedInteger);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(289);
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
		public function signedInteger() : Context\SignedIntegerContext
		{
		    $localContext = new Context\SignedIntegerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 80, self::RULE_signedInteger);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(291);
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
		public function integer() : Context\IntegerContext
		{
		    $localContext = new Context\IntegerContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 82, self::RULE_integer);

		    try {
		        $this->setState(295);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::SIGNED_INTEGER:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(293);
		            	$this->signedInteger();
		            	break;

		            case self::UNSIGNED_INTEGER:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(294);
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
		public function float() : Context\FloatContext
		{
		    $localContext = new Context\FloatContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 84, self::RULE_float);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(297);
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
		public function string() : Context\StringContext
		{
		    $localContext = new Context\StringContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 86, self::RULE_string);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(299);

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

		public function sempred(?RuleContext $localContext, int $ruleIndex, int $predicateIndex) : bool
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

		private function sempredAndExpression(?Context\AndExpressionContext $localContext, int $predicateIndex) : bool
		{
			switch ($predicateIndex) {
			    case 0:
			        return $this->precpred($this->ctx, 2);
			}

			return true;
		}

		private function sempredOrExpression(?Context\OrExpressionContext $localContext, int $predicateIndex) : bool
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_path;
	    }

	    public function pathSequence() : ?PathSequenceContext
	    {
	    	return $this->getTypedRuleContext(PathSequenceContext::class, 0);
	    }

	    public function root() : ?RootContext
	    {
	    	return $this->getTypedRuleContext(RootContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterPath($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitPath($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_root;
	    }

	    public function DOLLAR() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::DOLLAR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterRoot($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitRoot($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
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

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterPathSequence($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitPathSequence($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_subscriptFilter;
	    }

	    public function SQUARE_BRACKET_OPEN() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SQUARE_BRACKET_OPEN, 0);
	    }

	    public function QUESTION_MARK() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::QUESTION_MARK, 0);
	    }

	    public function ROUND_BRACKET_OPEN() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::ROUND_BRACKET_OPEN, 0);
	    }

	    public function booleanExpression() : ?BooleanExpressionContext
	    {
	    	return $this->getTypedRuleContext(BooleanExpressionContext::class, 0);
	    }

	    public function ROUND_BRACKET_CLOSE() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::ROUND_BRACKET_CLOSE, 0);
	    }

	    public function SQUARE_BRACKET_CLOSE() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SQUARE_BRACKET_CLOSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterSubscriptFilter($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitSubscriptFilter($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_childAccess;
	    }

	    public function fieldAccessor() : ?FieldAccessorContext
	    {
	    	return $this->getTypedRuleContext(FieldAccessorContext::class, 0);
	    }

	    public function arrayAccessor() : ?ArrayAccessorContext
	    {
	    	return $this->getTypedRuleContext(ArrayAccessorContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterChildAccess($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitChildAccess($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_fieldAccessor;
	    }

	    public function dotField() : ?DotFieldContext
	    {
	    	return $this->getTypedRuleContext(DotFieldContext::class, 0);
	    }

	    public function recursiveSubscriptFilter() : ?RecursiveSubscriptFilterContext
	    {
	    	return $this->getTypedRuleContext(RecursiveSubscriptFilterContext::class, 0);
	    }

	    public function recursiveAny() : ?RecursiveAnyContext
	    {
	    	return $this->getTypedRuleContext(RecursiveAnyContext::class, 0);
	    }

	    public function recursiveField() : ?RecursiveFieldContext
	    {
	    	return $this->getTypedRuleContext(RecursiveFieldContext::class, 0);
	    }

	    public function anyChild() : ?AnyChildContext
	    {
	    	return $this->getTypedRuleContext(AnyChildContext::class, 0);
	    }

	    public function subscriptField() : ?SubscriptFieldContext
	    {
	    	return $this->getTypedRuleContext(SubscriptFieldContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterFieldAccessor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitFieldAccessor($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_dotField;
	    }

	    public function SINGLE_DOT() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SINGLE_DOT, 0);
	    }

	    public function identifier() : ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterDotField($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitDotField($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_recursiveSubscriptFilter;
	    }

	    public function subscriptFilter() : ?SubscriptFilterContext
	    {
	    	return $this->getTypedRuleContext(SubscriptFilterContext::class, 0);
	    }

	    public function DOUBLE_DOT() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::DOUBLE_DOT, 0);
	    }

	    public function ASTERISK() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::ASTERISK, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterRecursiveSubscriptFilter($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitRecursiveSubscriptFilter($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_recursiveAny;
	    }

	    public function DOUBLE_DOT() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::DOUBLE_DOT, 0);
	    }

	    public function ASTERISK() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::ASTERISK, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterRecursiveAny($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitRecursiveAny($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_recursiveField;
	    }

	    public function DOUBLE_DOT() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::DOUBLE_DOT, 0);
	    }

	    public function identifier() : ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterRecursiveField($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitRecursiveField($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_anyChild;
	    }

	    public function SINGLE_DOT() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SINGLE_DOT, 0);
	    }

	    public function ASTERISK() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::ASTERISK, 0);
	    }

	    public function SQUARE_BRACKET_OPEN() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SQUARE_BRACKET_OPEN, 0);
	    }

	    public function SQUARE_BRACKET_CLOSE() : ?TerminalNode
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

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterAnyChild($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitAnyChild($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_subscriptField;
	    }

	    public function SQUARE_BRACKET_OPEN() : ?TerminalNode
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

	    public function SQUARE_BRACKET_CLOSE() : ?TerminalNode
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

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterSubscriptField($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitSubscriptField($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_arrayAccessor;
	    }

	    public function SQUARE_BRACKET_OPEN() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SQUARE_BRACKET_OPEN, 0);
	    }

	    public function SQUARE_BRACKET_CLOSE() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SQUARE_BRACKET_CLOSE, 0);
	    }

	    public function arrayAll() : ?ArrayAllContext
	    {
	    	return $this->getTypedRuleContext(ArrayAllContext::class, 0);
	    }

	    public function arraySlice() : ?ArraySliceContext
	    {
	    	return $this->getTypedRuleContext(ArraySliceContext::class, 0);
	    }

	    public function arrayRandomAccess() : ?ArrayRandomAccessContext
	    {
	    	return $this->getTypedRuleContext(ArrayRandomAccessContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterArrayAccessor($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitArrayAccessor($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_arrayAll;
	    }

	    public function ASTERISK() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::ASTERISK, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterArrayAll($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitArrayAll($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
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

	    public function unsignedInteger() : ?UnsignedIntegerContext
	    {
	    	return $this->getTypedRuleContext(UnsignedIntegerContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterArraySlice($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitArraySlice($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
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

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterArrayRandomAccess($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitArrayRandomAccess($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_booleanExpression;
	    }

	    public function andExpression() : ?AndExpressionContext
	    {
	    	return $this->getTypedRuleContext(AndExpressionContext::class, 0);
	    }

	    public function orExpression() : ?OrExpressionContext
	    {
	    	return $this->getTypedRuleContext(OrExpressionContext::class, 0);
	    }

	    public function expression() : ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterBooleanExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitBooleanExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_andExpression;
	    }

	    public function expression() : ?ExpressionContext
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

	    public function andOperator() : ?AndOperatorContext
	    {
	    	return $this->getTypedRuleContext(AndOperatorContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterAndExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitAndExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_orExpression;
	    }

	    public function expression() : ?ExpressionContext
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

	    public function orOperator() : ?OrOperatorContext
	    {
	    	return $this->getTypedRuleContext(OrOperatorContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterOrExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitOrExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_expression;
	    }

	    public function expression1() : ?Expression1Context
	    {
	    	return $this->getTypedRuleContext(Expression1Context::class, 0);
	    }

	    public function expression2() : ?Expression2Context
	    {
	    	return $this->getTypedRuleContext(Expression2Context::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
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

	    public function comparisonOperator() : ?ComparisonOperatorContext
	    {
	    	return $this->getTypedRuleContext(ComparisonOperatorContext::class, 0);
	    }

	    public function value() : ?ValueContext
	    {
	    	return $this->getTypedRuleContext(ValueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterExpression1($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitExpression1($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_expression2;
	    }

	    public function value() : ?ValueContext
	    {
	    	return $this->getTypedRuleContext(ValueContext::class, 0);
	    }

	    public function comparisonOperator() : ?ComparisonOperatorContext
	    {
	    	return $this->getTypedRuleContext(ComparisonOperatorContext::class, 0);
	    }

	    public function subQuery() : ?SubQueryContext
	    {
	    	return $this->getTypedRuleContext(SubQueryContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterExpression2($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitExpression2($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_subQuery;
	    }

	    public function pathSequence() : ?PathSequenceContext
	    {
	    	return $this->getTypedRuleContext(PathSequenceContext::class, 0);
	    }

	    public function current() : ?CurrentContext
	    {
	    	return $this->getTypedRuleContext(CurrentContext::class, 0);
	    }

	    public function root() : ?RootContext
	    {
	    	return $this->getTypedRuleContext(RootContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterSubQuery($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitSubQuery($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_current;
	    }

	    public function AT_SIGN() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::AT_SIGN, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterCurrent($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitCurrent($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_value;
	    }

	    public function booleanValue() : ?BooleanValueContext
	    {
	    	return $this->getTypedRuleContext(BooleanValueContext::class, 0);
	    }

	    public function numberValue() : ?NumberValueContext
	    {
	    	return $this->getTypedRuleContext(NumberValueContext::class, 0);
	    }

	    public function nullValue() : ?NullValueContext
	    {
	    	return $this->getTypedRuleContext(NullValueContext::class, 0);
	    }

	    public function stringValue() : ?StringValueContext
	    {
	    	return $this->getTypedRuleContext(StringValueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitValue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_stringValue;
	    }

	    public function string() : ?StringContext
	    {
	    	return $this->getTypedRuleContext(StringContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterStringValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitStringValue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_numberValue;
	    }

	    public function integer() : ?IntegerContext
	    {
	    	return $this->getTypedRuleContext(IntegerContext::class, 0);
	    }

	    public function float() : ?FloatContext
	    {
	    	return $this->getTypedRuleContext(FloatContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterNumberValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitNumberValue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_booleanValue;
	    }

	    public function KEYWORD_TRUE() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::KEYWORD_TRUE, 0);
	    }

	    public function KEYWORD_FALSE() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::KEYWORD_FALSE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterBooleanValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitBooleanValue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_nullValue;
	    }

	    public function KEYWORD_NULL() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::KEYWORD_NULL, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterNullValue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitNullValue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_andOperator;
	    }

	    public function KEYWORD_AND() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::KEYWORD_AND, 0);
	    }

	    public function DOUBLE_AMPERSAND() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::DOUBLE_AMPERSAND, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterAndOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitAndOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_orOperator;
	    }

	    public function KEYWORD_OR() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::KEYWORD_OR, 0);
	    }

	    public function DOUBLE_PIPE() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::DOUBLE_PIPE, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterOrOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitOrOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_comparisonOperator;
	    }

	    public function equalOperator() : ?EqualOperatorContext
	    {
	    	return $this->getTypedRuleContext(EqualOperatorContext::class, 0);
	    }

	    public function notEqualOperator() : ?NotEqualOperatorContext
	    {
	    	return $this->getTypedRuleContext(NotEqualOperatorContext::class, 0);
	    }

	    public function greaterOrEqualOperator() : ?GreaterOrEqualOperatorContext
	    {
	    	return $this->getTypedRuleContext(GreaterOrEqualOperatorContext::class, 0);
	    }

	    public function greaterOperator() : ?GreaterOperatorContext
	    {
	    	return $this->getTypedRuleContext(GreaterOperatorContext::class, 0);
	    }

	    public function lessOrEqualOperator() : ?LessOrEqualOperatorContext
	    {
	    	return $this->getTypedRuleContext(LessOrEqualOperatorContext::class, 0);
	    }

	    public function lessOperator() : ?LessOperatorContext
	    {
	    	return $this->getTypedRuleContext(LessOperatorContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterComparisonOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitComparisonOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_equalOperator;
	    }

	    public function EQUAL_OPERATOR() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::EQUAL_OPERATOR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterEqualOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitEqualOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_notEqualOperator;
	    }

	    public function NOT_EQUAL_OPERATOR() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::NOT_EQUAL_OPERATOR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterNotEqualOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitNotEqualOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_greaterOrEqualOperator;
	    }

	    public function GREATER_OR_EQUAL_OPERATOR() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::GREATER_OR_EQUAL_OPERATOR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterGreaterOrEqualOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitGreaterOrEqualOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_greaterOperator;
	    }

	    public function GREATER_OPERATOR() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::GREATER_OPERATOR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterGreaterOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitGreaterOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_lessOrEqualOperator;
	    }

	    public function LESS_OR_EQUAL_OPERATOR() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::LESS_OR_EQUAL_OPERATOR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterLessOrEqualOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitLessOrEqualOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_lessOperator;
	    }

	    public function LESS_OPERATOR() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::LESS_OPERATOR, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterLessOperator($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitLessOperator($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_identifier;
	    }

	    public function IDENTIFIER() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::IDENTIFIER, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterIdentifier($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitIdentifier($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_unsignedInteger;
	    }

	    public function UNSIGNED_INTEGER() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::UNSIGNED_INTEGER, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterUnsignedInteger($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitUnsignedInteger($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_signedInteger;
	    }

	    public function SIGNED_INTEGER() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SIGNED_INTEGER, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterSignedInteger($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitSignedInteger($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_integer;
	    }

	    public function signedInteger() : ?SignedIntegerContext
	    {
	    	return $this->getTypedRuleContext(SignedIntegerContext::class, 0);
	    }

	    public function unsignedInteger() : ?UnsignedIntegerContext
	    {
	    	return $this->getTypedRuleContext(UnsignedIntegerContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterInteger($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitInteger($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_float;
	    }

	    public function FLOAT() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::FLOAT, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterFloat($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitFloat($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
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

		public function getRuleIndex() : int
		{
		    return JsonPathParser::RULE_string;
	    }

	    public function SINGLE_QUOTED_STRING() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::SINGLE_QUOTED_STRING, 0);
	    }

	    public function DOUBLE_QUOTED_STRING() : ?TerminalNode
	    {
	        return $this->getToken(JsonPathParser::DOUBLE_QUOTED_STRING, 0);
	    }

		public function enterRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->enterString($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener) : void
		{
			if ($listener instanceof JsonPathListener) {
			    $listener->exitString($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor)
		{
			if ($visitor instanceof JsonPathVisitor) {
			    return $visitor->visitString($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}