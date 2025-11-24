<?php

namespace Rmo\Syntaxsanctuary;

class Parrafo {
    public function __construct (private string $parrafo = '') {
        if ($this->parrafo == '') {
            echo "Coloca entre los parentesis entre '' una cadena de caracteres(string) para definir el parrafo.";
        } else {
            $this->parrafo = htmlspecialchars ($this->parrafo);
        }
    }
    public function parrafo (string $class = '',string $id = '',string $style = '') : string {
        if ($class != '' && $id != '' && $style == '') {
            return "<p class='".$class."' id='".$id."'>".$this->parrafo."</p>";
        } else if ($class != '' && $id == '' && $style == '') {
            return "<p class='".$class."'>".$this->parrafo."</p>";
        } else if ($class == '' && $id != '' && $style == '') {
            return "<p id='".$id."'>".$this->parrafo."</p>";
        } else if ($class == '' && $id == '' && $style != '') {
            return "<p style='".$style."'>".$this->parrafo."</p>";
        } else {
            return "<p>".$this->parrafo."</p>";
        }
    }
}