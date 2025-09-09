Json Path AST builder for PHP 
=====================

[![Build Status](https://github.com/jojo1981/json-path-ast-builder/actions/workflows/build.yml/badge.svg)](https://github.com/jojo1981/json-path-ast-builder/actions/workflows/build.yml)
[![Coverage Status](https://coveralls.io/repos/github/jojo1981/json-path-ast-builder/badge.svg)](https://coveralls.io/github/jojo1981/json-path-ast-builder)
[![Latest Stable Version](https://poser.pugx.org/jojo1981/json-path-ast-builder/v/stable)](https://packagist.org/packages/jojo1981/json-path-ast-builder)
[![Total Downloads](https://poser.pugx.org/jojo1981/json-path-ast-builder/downloads)](https://packagist.org/packages/jojo1981/json-path-ast-builder)
[![License](https://poser.pugx.org/jojo1981/json-path-ast-builder/license)](https://packagist.org/packages/jojo1981/json-path-ast-builder)

Author: Joost Nijhuis <[jnijhuis81@gmail.com](mailto:jnijhuis81@gmail.com)>

A PHP Implementation for building an AST (Abstract Syntax Tree) from a `JSON Path` string.  
The AST is visitable and can be visited by implementing a visitor (Behavioral Design Pattern Visitor).
 
Purposes of this library are:

- Validate JSON Path syntax and give the end user a precise error message about syntax errors
- Transform the AST into some other usable structure
- Travers AST by implementing your own visitor


More information about JSON Path can be found [here](https://goessner.net/articles/JsonPath).  

## Installation

### Library

```bash
git clone https://github.com/jojo1981/json-path-ast-builder.git
```

### Composer

[Install PHP Composer](https://getcomposer.org/doc/00-intro.md)

```bash
composer require jojo1981/json-path-ast-builder
```

## Usage

```php
<?php

require 'vendor/autoload.php';

$astBuilder = new \Jojo1981\JsonPathAstBuilder\AstBuilder();
$ast = $astBuilder->buildAst('$.book[?(@.author==$.authors[?(@.pseudo==\'Hugo\')].name)].title');

```
