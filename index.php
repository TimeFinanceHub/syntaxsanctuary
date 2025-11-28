<?php
require_once 'vendor/autoload.php';

use Rmo\Syntaxsanctuary\Page;

$page = new Page('SYNTAXSANCTUARY');

$page->addMeta(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0']);
$page->addMeta(['name' => 'description', 'content' => 'Guía paso a paso para construir tu presencia digital, desde el correo electrónico hasta el despliegue web profesional.']);

$page->addLink(['rel' => 'apple-touch-icon', 'sizes' => '180x180', 'href' => '/apple-touch-icon.png']);
$page->addLink(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '32x32', 'href' => '/favicon-32x32.png']);
$page->addLink(['rel' => 'icon', 'type' => 'image/png', 'sizes' => '16x16', 'href' => '/favicon-16x16.png']);
$page->addLink(['rel' => 'manifest', 'href' => '/site.webmanifest']);
$page->addLink(['href' => 'https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Roboto:wght@300;400;700&display=swap', 'rel' => 'stylesheet']);

$css = <<<CSS
        /* =================================================== */
        /* VARIABLES Y RESET BÁSICO (MOBILE-FIRST BASE) */
        /* =================================================== */
        :root {
            --color-bg-dark: #0a0e14;
            --color-bg-card: #14181f;
            --color-primary: #00bcd4; /* Cian vibrante */
            --color-secondary: #00ff7f; /* Verde Neón */
            --color-text-light: #e0e6f1;
            --font-display: 'Orbitron', sans-serif;
            --font-body: 'Roboto', sans-serif;
        }

        /* Estilos Base para Móviles */
        body {
            font-family: var(--font-body);
            margin: 0;
            padding: 0;
            color: var(--color-text-light);
            background-color: var(--color-bg-dark); 
            line-height: 1.6;
            min-height: 100vh;
        }
        .container {
            width: 90%; 
            margin: 0 auto;
            padding: 20px 0;
            max-width: 1200px;
        }
        
        /* =================================================== */
        /* SECCIÓN HERO - ADAPTACIÓN DE NOMBRE */
        /* =================================================== */
        .seccion-heroe {
            text-align: center;
            padding: 50px 0 60px 0;
            background: linear-gradient(180deg, var(--color-bg-dark) 0%, rgba(16, 50, 70, 0.4) 100%);
            border-bottom: 3px solid var(--color-primary);
        }
        .seccion-heroe h1 {
            font-family: var(--font-display);
            font-size: 1.8em; 
            color: var(--color-primary); 
            margin: 0;
            letter-spacing: 3px;
            text-shadow: 0 0 10px rgba(0, 188, 212, 0.8);
        }
        /* Nombre abreviado para móvil por defecto */
        .nombre-completo { display: none; }
        .nombre-abreviado { display: inline; }

        .seccion-heroe h2 {
            font-size: 1em;
            color: var(--color-secondary);
            margin-top: 5px;
            font-weight: 300;
        }
        .seccion-heroe p {
            font-size: 0.95em;
            max-width: 600px;
            margin: 15px auto 0;
            font-style: italic;
        }

        /* El botón de llamada a la acción fue eliminado por petición */

        /* =================================================== */
        /* TARJETAS DE CONTENIDO (Mobile: Apiladas) */
        /* =================================================== */
        .seccion-contenido {
            padding: 40px 0 10px 0;
        }
        .tarjeta {
            background-color: var(--color-bg-card);
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 30px; 
            border: 1px solid rgba(0, 188, 212, 0.2);
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);
        }
        .tarjeta:hover {
            border-color: var(--color-primary);
            box-shadow: 0 5px 20px rgba(0, 188, 212, 0.2);
        }
        .tarjeta h3 {
            font-family: var(--font-display);
            color: var(--color-primary);
            font-size: 1.4em; 
            border-bottom: 3px solid var(--color-secondary);
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .tarjeta p {
             font-size: 0.95em;
             margin-bottom: 15px;
        }

        /* Lista de Pasos (Camino Digital) */
        .tarjeta ul {
            list-style-type: none;
            padding-left: 0;
            margin: 0;
        }
        .tarjeta ul li {
            padding: 12px 0;
            border-bottom: 1px dashed #2a2e3a;
            position: relative;
            padding-left: 35px; 
        }
        .tarjeta ul li:last-child {
            border-bottom: none;
        }
        .tarjeta ul li:before {
            content: "▶"; 
            color: var(--color-secondary); 
            font-weight: 900;
            display: inline-block; 
            position: absolute;
            left: 0;
            font-size: 1.2em;
            transform: translateY(-50%);
            top: 50%;
        }

        /* Bloque de Código (Estructura) */
        .tarjeta pre {
            background-color: #000;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            color: var(--color-secondary); 
            font-size: 0.8em; 
            border: 1px solid var(--color-secondary);
            box-shadow: inset 0 0 10px rgba(0, 255, 127, 0.3);
            white-space: pre-wrap; 
        }
        .tarjeta pre:before {
            content: "$ REPOSITORIO/"; 
            display: block;
            color: var(--color-primary);
            margin-bottom: 10px;
            font-weight: bold;
        }

        /* NEW NAVIGATION STYLES */
        .main-nav {
            background-color: #07090c;
            padding: 10px 0;
            border-bottom: 1px solid var(--color-primary);
            text-align: center;
        }
        .main-nav .container {
            padding: 0;
        }
        .main-nav .nav-link {
            color: var(--color-text-light);
            text-decoration: none;
            font-family: var(--font-display);
            font-size: 1.1em;
            padding: 5px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .main-nav .nav-link:hover {
            background-color: var(--color-primary);
            color: var(--color-bg-dark);
        }

        /* =================================================== */
        /* PIE DE PÁGINA (FOOTER) */
        /* =================================================== */
        footer {
            background-color: #07090c; 
            padding: 25px 0;
            text-align: center;
            border-top: 5px solid var(--color-secondary);
            font-family: var(--font-display);
        }
        .nombre-pie {
            font-size: 1.5em;
            color: var(--color-primary);
            margin-bottom: 5px;
        }
        .info-autoria {
            font-size: 0.7em;
            color: #586069;
            margin-top: 15px;
        }
        
        /* =================================================== */
        /* MEDIA QUERY: ESCRITORIOS (> 768px) */
        /* =================================================== */
        @media (min-width: 768px) {
            
            /* Nombre completo visible en pantalla grande */
            .nombre-completo { display: inline; }
            .nombre-abreviado { display: none; }
            
            .seccion-heroe h1 {
                font-size: 3em; 
            }
            
            /* Layout a doble columna para las tarjetas principales */
            .grid-contenido {
                display: grid;
                grid-template-columns: 2fr 1.5fr; 
                gap: 50px;
            }
            .tarjeta {
                margin-bottom: 0;
            }
        }
        
        /* MEDIA QUERY: ESCRITORIOS GRANDES (> 1200px) */
        @media (min-width: 1200px) {
            .seccion-heroe {
                padding: 100px 0 120px 0; 
            }
            .seccion-heroe h1 {
                font-size: 4.5em;
            }
        }
CSS;

$page->setStyle($css);

echo $page->render();
