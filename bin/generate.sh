#!/usr/bin/env bash

java -Xmx2048M -cp "./bin/antlr-4.13.2-complete.jar:$CLASSPATH" org.antlr.v4.Tool -listener -visitor -Dlanguage=PHP -package Jojo1981\\JsonPathAstBuilder\\Parser -Xexact-output-dir -o ./src/Parser ./resources/JsonPath.g4
