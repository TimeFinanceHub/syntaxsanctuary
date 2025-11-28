<?php
// This file demonstrates how to fix the "Call to undefined method Rmo\Syntaxsanctuary\Tituloh1::titulo()" error.
// If you are experiencing this error, it means you are using an outdated index.php file
// that has not been updated after the library's refactoring.
//
// Please update your index.php file to use the `render()` method instead of `titulo()`.
//
// Original problematic code:
// use Rmo\Syntaxsanctuary\Tituloh1;
// $titulo = new Tituloh1('My First Heading');
// echo $titulo->titulo(); // This line causes the error
//
// Corrected code:

require_once 'vendor/autoload.php'; // Ensure autoloader is correctly loaded

use Rmo\Syntaxsanctuary\Tituloh1;
use Rmo\Syntaxsanctuary\Parrafo;

echo "<h1>Example of corrected Tituloh1 usage</h1>";

$titulo = new Tituloh1('My First Heading');
echo $titulo->render(); // Corrected: use render()

$parrafo = new Parrafo('This is a paragraph created with the refactored Parrafo class.');
echo $parrafo->render(); // Correctly uses render()

?>

<p>Please ensure your main `index.php` file (or any other file using the old `titulo()` or `parrafo()` methods) is updated to reflect the new `render()` method signatures.</p>
<p>Alternatively, you can replace your problematic `index.php` file with the latest `index.php` from the repository, which uses the new `Page` class to render the entire page.</p>

<style>
    body {
        font-family: sans-serif;
        background-color: #f4f4f9;
        color: #333;
        line-height: 1.6;
        padding: 20px;
    }
    h1 {
        color: #d9534f;
    }
</style>
