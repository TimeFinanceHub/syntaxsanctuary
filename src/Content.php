<?php

namespace Rmo\Syntaxsanctuary;

require_once 'Html.php';
require_once 'Card.php';
require_once 'H.php';
require_once 'Parrafo.php';

class Content
{
    private Html $html;

    public function __construct()
    {
        $this->html = new Html();
    }

    public function render(): string
    {
        $h2 = (new H('<em>Misi&oacute;n:</em>', '2', true))->render();

        // Card 1
        $p1 = (new Parrafo('Este programa te guía paso a paso para establecer una presencia digital sólida que impacte en el mundo físico. Aprenderás a dominar la infraestructura de Internet desde cero:'))->render();
        $li1 = $this->html->createElement('li', [], 'Paso 1: Identidad Digital Inicial. Crea tu correo electrónico profesional y configura las herramientas de comunicación modernas.');
        $li2 = $this->html->createElement('li', [], 'Paso 2: La Base de tu Universo. Aprende a comprar un nombre de dominio personalizado y elige el servicio de hosting adecuado.');
        $li3 = $this->html->createElement('li', [], 'Paso 3: El Pilar Central. Monta tu primera página web en Internet, visible para todo el mundo, con una dirección única (URL).');
        $li4 = $this->html->createElement('li', [], 'Paso 4: Seguridad y Despliegue. Domina los pasos intermedios cruciales: gestionar servidores, transferir archivos (FTP) y asegurar tu sitio.');
        $ul = $this->html->createElement('ul', [], $li1 . $li2 . $li3 . $li4);
        $card1Content = $p1 . $ul;
        $card1 = new Card('🚀 El Camino de la Relevancia Digital', $card1Content, 'camino-digital');

        // Card 2
        $p2 = (new Parrafo('Visión general de la organización inicial del repositorio, esencial para la navegación del programa:'))->render();
        $preContent = "
├── index.html                   &lt;-- Landing Page
├── 0_registrar/                 &lt;-- Lógica y vista
│   └── index.php                
├── 1_entrar/                    &lt;-- páginas
│   ├── index.php                
│   ├── 0_publico/               &lt;-- Contenido sin autenticación
│   └── 1_privado/               &lt;-- Dashboard
└── 2_salir/                     &lt;-- Lógica para Cerrar Sesión
    └── index.php";
        $pre = $this->html->createElement('pre', [], $preContent);
        $card2Content = $p2 . $pre;
        $card2 = new Card('🏗️ GitHub', $card2Content);

        $grid = $this->html->createElement('div', ['class' => 'grid-contenido'], $card1->render() . $card2->render());

        $sectionContent = $h2 . $grid;
        return $this->html->createElement('section', ['class' => 'seccion-contenido container'], $sectionContent);
    }
}
