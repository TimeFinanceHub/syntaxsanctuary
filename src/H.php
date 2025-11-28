<?php

namespace Rmo\Syntaxsanctuary;

require_once 'Html.php';

class H
{
    private Html $html;
    private string $content;
    private string $numero;

    public function __construct(string $content, string $numero, bool $raw = false)
    {
        $this->html = new Html();
        $this->content = $raw ? $content : htmlspecialchars($content, ENT_QUOTES | ENT_HTML5, 'UTF-8', false);

        if ($numero > '6' || $numero < 2) {
            echo "Numero de titulo no valido";
            $this->numero = '';
        } else {
            $this->numero = htmlspecialchars($numero, ENT_QUOTES | ENT_HTML5, 'UTF-8', false);
        }
    }

    public function render(array $attributes = []): string
    {
        if(empty($this->numero)) {
            return "Titulo no valido";
        }
        $tag = 'h' . $this->numero;
        return $this->html->createElement($tag, $attributes, $this->content);
    }
}