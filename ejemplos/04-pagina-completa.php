<?php

require_once '../vendor/autoload.php';

use Rmo\Syntaxsanctuary\Page;
use Rmo\Syntaxsanctuary\Header;
use Rmo\Syntaxsanctuary\Content;
use Rmo\Syntaxsanctuary\Footer;

$page = new Page('Mi Página Completa');

// Añadir metadatos y estilos
$page->addMeta(['name' => 'author', 'content' => 'SyntaxSanctuary']);
$page->addLink(['rel' => 'stylesheet', 'href' => 'https://unpkg.com/sakura.css/css/sakura.css']);

// El contenido de la página ya está definido en las clases Header, Content y Footer.
// Este ejemplo muestra cómo se renderiza la página completa que clonamos.

echo $page->render();

