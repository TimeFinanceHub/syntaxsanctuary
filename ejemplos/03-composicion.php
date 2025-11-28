<?php

require_once '../vendor/autoload.php';

use Rmo\Syntaxsanctuary\Html;
use Rmo\Syntaxsanctuary\Tituloh1;
use Rmo\Syntaxsanctuary\H;
use Rmo\Syntaxsanctuary\Parrafo;

echo "<h1>Ejemplo de Composición</h1>";

$html = new Html();

// Crear un artículo completo componiendo elementos
$tituloArticulo = new H("Artículo de Ejemplo", "2");
$parrafoArticulo = new Parrafo("Este es el contenido del artículo, creado mediante la composición de varios elementos HTML.");

$contenidoArticulo = $tituloArticulo->render(['class' => 'titulo-articulo']) . 
                   $parrafoArticulo->render(['class' => 'parrafo-articulo']);

$articulo = $html->createElement('article', ['class' => 'articulo'], $contenidoArticulo);

echo $articulo;


// Crear una tarjeta (card)
$tituloCard = new H("Tarjeta de Información", "3");
$parrafoCard = new Parrafo("Este es el cuerpo de la tarjeta, que puede contener información importante.");
$linkCard = $html->createElement('a', ['href' => '#', 'class' => 'btn'], "Leer más");

$contenidoCard = $tituloCard->render() . $parrafoCard->render() . $linkCard;

$card = $html->createElement('div', ['class' => 'card'], $contenidoCard);

echo $card;

?>

<style>
    body {
        font-family: sans-serif;
        background-color: #f9f9f9;
        color: #333;
        line-height: 1.6;
        padding: 20px;
    }
    h1, h2, h3 {
        color: #337ab7;
    }
    .articulo {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
    }
    .titulo-articulo {
        color: #333;
    }
    .card {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 20px;
        margin-top: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .btn {
        display: inline-block;
        padding: 10px 15px;
        background-color: #337ab7;
        color: #fff;
        text-decoration: none;
        border-radius: 3px;
        margin-top: 10px;
    }
</style>
