<?php

namespace Rmo\Syntaxsanctuary;

require_once 'Html.php';

class Parrafo extends Html
{
    public function __construct(string $parrafo = '')
    {
        parent::__construct($parrafo);
        $this->content = $parrafo;
    }

    public function parrafo(string $class = '', string $id = '', string $style = ''): string
    {
        return $this->render('p', $class, $id, $style);
    }
}