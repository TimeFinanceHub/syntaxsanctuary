<?php
// Use Composer's autoloader for all classes. This replaces individual require_once statements.
require_once 'vendor/autoload.php';

use Rmo\\Syntaxsanctuary\\Tituloh1;
use Rmo\\Syntaxsanctuary\\Parrafo;

// Corrected usage of Tituloh1 class
$titulo = new Tituloh1('My First Heading');
// The 'titulo()' method no longer exists. Use 'render()' instead.
echo $titulo->render(); // Corrected line

// Corrected usage of Parrafo class
$parrafo = new Parrafo('This is a paragraph.');
// The 'parrafo()' method no longer exists. Use 'render()' instead.
echo $parrafo->render(); // Corrected line
?>

<!-- Optional: You can add some basic styling here if this is your main index.php -->
<style>
    body { font-family: sans-serif; margin: 20px; background-color: #f0f0f0; color: #333; }
    h1 { color: #0056b3; }
    p { color: #555; }
</style>

