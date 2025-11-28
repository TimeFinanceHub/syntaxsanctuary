<?php

namespace Rmo\Syntaxsanctuary;

require_once 'Html.php';
require_once 'H.php';
require_once 'Parrafo.php';

class Header
{
    private Html $html;

    public function __construct()
    {
        $this->html = new Html();
    }

    public function render(): string
    {
        $span1 = $this->html->createElement('span', ['class' => 'nombre-completo'], 'La Infraestructura de Internet');
        $span2 = $this->html->createElement('span', ['class' => 'nombre-abreviado'], 'Internet');
        $h1 = $this->html->createElement('h1', [], $span1 . $span2);

        $h2 = (new H('Tu Relevancia Digital Comienza Ahora', '2'))->render();

        $p = (new Parrafo('Visión: El mundo digital e Internet de principio a fin.'))->render();

        $divContent = $h1 . $h2 . $p;
        $div = $this->html->createElement('div', ['class' => 'container'], $divContent);

        $section = $this->html->createElement('section', ['class' => 'seccion-heroe'], $div);

        return $this->html->createElement('header', [], $section);
    }
}
