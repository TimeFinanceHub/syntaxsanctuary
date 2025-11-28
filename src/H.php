<?php

namespace Rmo\Syntaxsanctuary;

require_once 'Html.php';

class H extends Html
{
    private string $numero;

    public function __construct(string $titulo = '', string $numero = '')
    {
        parent::__construct($titulo);
        $this->content = $titulo;

        if ($numero == '' || $numero > '6' || $numero < 2) {
            echo "Coloca un numero de tipo (string) despues del titulo separado por coma *new H('titulo','tamaño')*";
            $this->numero = ''; // Set to invalid
        } else {
            $this->numero = htmlspecialchars($numero, ENT_QUOTES | ENT_HTML5, 'UTF-8', false);
        }
    }

    public function titulo(string $class = '', string $id = '', string $style = ''): string
    {
        if (empty($this->numero)) {
            return "titulo no valido.";
        }
        $tag = 'h' . $this->numero;
        return $this->render($tag, $class, $id, $style);
    }
}