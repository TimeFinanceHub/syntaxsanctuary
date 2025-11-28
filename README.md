# Project Overview

This project is a simple PHP library for generating basic HTML elements. It consists of a collection of classes, each responsible for creating a specific HTML tag. The library appears to be intended for direct inclusion in PHP projects.

The main technologies used are:
- PHP

## Files

- `Calculadora.php`: A simple class with a `sumar` method to add two numbers.
- `H.php`: A class to generate HTML headings (`<h2>` to `<h6>`).
- `Html.php`: A base class for HTML elements.
- `Parrafo.php`: A class to generate HTML paragraph tags (`<p>`).
- `Tituloh1.php`: A class to generate HTML `<h1>` heading tags.

## How to use

Here is an example of how to use the classes in this library:

```php
<?php
require_once 'path/to/your/library/Tituloh1.php';
require_once 'path/to/your/library/Parrafo.php';

use Rmo\\Syntaxsanctuary\\Tituloh1;
use Rmo\\Syntaxsanctuary\\Parrafo;

$titulo = new Tituloh1('My First Heading');
echo $titulo->titulo();

$parrafo = new Parrafo('This is a paragraph.');
echo $parrafo->parrafo();
```

## Development Conventions

- The code is organized into classes within the `Rmo\Syntaxsanctuary` namespace.
- The classes use `htmlspecialchars` to prevent XSS attacks.
- The project uses `phpunit` for testing. To run the tests, execute the following command:

```bash
./vendor/bin/phpunit tests/
```