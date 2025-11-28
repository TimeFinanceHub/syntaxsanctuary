<?php

require_once '../vendor/autoload.php';

use Rmo\Syntaxsanctuary\Tituloh1;
use Rmo\Syntaxsanctuary\H;
use Rmo\Syntaxsanctuary\Parrafo;

echo "<h1>Ejemplo de Atributos</h1>";

// Ejemplo 1: Título H1 con una clase CSS
$titulo1 = new Tituloh1("Título con Clase CSS");
echo $titulo1->render(['class' => 'titulo-principal']);

// Ejemplo 2: Subtítulo H2 con un ID
$subtitulo = new H("Subtítulo con ID", "2");
echo $subtitulo->render(['id' => 'seccion-introduccion']);

// Ejemplo 3: Párrafo con estilo en línea
$parrafo = new Parrafo("Este párrafo tiene un estilo en línea para cambiar su color y tamaño de fuente.");
echo $parrafo->render(['style' => 'color: #d9534f; font-size: 18px;']);

// Ejemplo 4: Título H3 con múltiples atributos
$subtitulo3 = new H("Subtítulo con Clase, ID y Estilo", "3");
echo $subtitulo3->render([
    'class' => 'subtitulo-destacado',
    'id' => 'subtitulo-3',
    'style' => 'border-bottom: 2px solid #5cb85c;'
]);

$parrafo2 = new Parrafo("Este párrafo sigue a un subtítulo con múltiples atributos.");
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
    .titulo-principal {
        background-color: #0056b3;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
    }
    #seccion-introduccion {
        border-left: 5px solid #f0ad4e;
        padding-left: 15px;
    }
    .subtitulo-destacado {
        padding-bottom: 5px;
    }
</style>
