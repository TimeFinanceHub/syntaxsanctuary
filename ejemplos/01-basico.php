<?php

require_once '../vendor/autoload.php';

use Rmo\Syntaxsanctuary\Tituloh1;
use Rmo\Syntaxsanctuary\H;
use Rmo\Syntaxsanctuary\Parrafo;

echo "<h1>Ejemplos Básicos</h1>";

// Ejemplo 1: Crear un título H1
$titulo1 = new Tituloh1("Este es un Título Principal (H1)");
echo $titulo1->render();

// Ejemplo 2: Crear un subtítulo H2
$subtitulo = new H("Este es un Subtítulo (H2)", "2");
echo $subtitulo->render();

// Ejemplo 3: Crear un párrafo
$parrafo = new Parrafo("Este es un párrafo de texto. Aquí puedes explicar algo con más detalle.");
echo $parrafo->render();

// Ejemplo 4: Crear otro subtítulo H3
$subtitulo3 = new H("Otro Subtítulo (H3)", "3");
echo $subtitulo3->render();

$parrafo2 = new Parrafo("Este es otro párrafo, demostrando cómo puedes seguir añadiendo contenido.");
echo $parrafo2->render();

?>

<style>
    body {
        font-family: sans-serif;
        background-color: #f4f4f9;
        color: #333;
        line-height: 1.6;
        padding: 20px;
    }
    h1, h2, h3 {
        color: #0056b3;
    }
</style>
