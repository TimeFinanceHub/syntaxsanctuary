<?php

namespace Rmo\Syntaxsanctuary;

class H {
    public function __construct (private string $titulo, private string $numero = '') {}
    public function titulo (string $class = '',string $id = '',string $style = '') : string {
        $numero = $this -> numero;
        if ($numero !== "1" && $numero >= "2" && $numero <= "5") {
            if ($class != '' && $id != '' && $style == '') {
                return "<h$numero class='".$class."' id='".$id."'>".$this->titulo."</h$numero>";
            } else if ($class != '' && $id == '' && $style == '') {
                return "<h$numero class='".$class."'>".$this->titulo."</h$numero>";
            } else if ($class == '' && $id != '' && $style == '') {
                return "<h$numero id='".$id."'>".$this->titulo."</h$numero>";
            } else if ($class == '' && $id == '' && $style != '') {
                return "<h$numero style='".$style."'>".$this->titulo."</h$numero>";
            } else {
                return "<h$numero>".$this->titulo."</h$numero>";
            }
        } else {
            return "titulo no valido.";
        }
    }
}