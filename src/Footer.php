<?php

namespace Rmo\Syntaxsanctuary;

require_once 'Html.php';
require_once 'Parrafo.php';

class Footer
{
    private Html $html;

    public function __construct()
    {
        $this->html = new Html();
    }

    public function render(): string
    {
        $span1 = $this->html->createElement('span', ['class' => 'nombre-completo'], 'World Wide Web');
        $span2 = $this->html->createElement('span', ['class' => 'nombre-abreviado'], 'www');
        $p = $this->html->createElement('p', ['class' => 'nombre-pie'], $span1 . $span2);

        $hr = $this->html->createElement('hr', ['style' => 'border-top: 1px solid #1f242d; margin: 10px auto; width: 50%;']);
        $br = $this->html->createElement('br');
        $divContent = $hr . "Autoría Intelectual y Colaboración:" . $br . "Autor: Ramiro G Glez. | Codificador y creador de ideas base en código: Gemini Flash 2.5";
        $div = $this->html->createElement('div', ['class' => 'info-autoria'], $divContent);

        $containerContent = $p . $div;
        $container = $this->html->createElement('div', ['class' => 'container'], $containerContent);

        return $this->html->createElement('footer', [], $container);
    }
}
