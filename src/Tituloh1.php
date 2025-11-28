<?php

namespace Rmo\Syntaxsanctuary;

require_once 'Html.php';

class Tituloh1 extends Html
{
    public function __construct(string $titulo = '')
    {
        parent::__construct($titulo);
        $this->content = $titulo;
    }

    public function titulo(string $class = '', string $id = '', string $style = ''): string
    {
        return $this->render('h1', $class, $id, $style);
    }
}