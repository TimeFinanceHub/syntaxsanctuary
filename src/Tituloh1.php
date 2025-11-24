<?php

namespace Rmo\Syntaxsanctuary;

class Tituloh1 {
    public function __construct (private string $titulo = '') {
        if ($this->titulo == '') {
            echo "Coloca entre los parentesis entre '' una cadena de caracteres(string) para definir el Titulo.";
        } else {
            $this->titulo = htmlspecialchars ($this->titulo);
        }
    }
    public function titulo (string $class = '',string $id = '',string $style = '') : string {
        if ($class != '' && $id != '' && $style == '') {
            return "<h1 class='".$class."' id='".$id."'>".$this->titulo."</h1>";
        } else if ($class != '' && $id == '' && $style == '') {
            return "<h1 class='".$class."'>".$this->titulo."</h1>";
        } else if ($class == '' && $id != '' && $style == '') {
            return "<h1 id='".$id."'>".$this->titulo."</h1>";
        } else if ($class == '' && $id == '' && $style != '') {
            return "<h1 style='".$style."'>".$this->titulo."</h1>";
        } else {
            return "<h1>".$this->titulo."</h1>";
        }
    }
}