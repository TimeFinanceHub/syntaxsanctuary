<?php

namespace Rmo\Syntaxsanctuary;

class H {
    public function __construct (private string $titulo = '', private string $numero = '') {
        if ($this->titulo == '') {
            return "Coloca entre los parentesis entre '' una cadena de caracteres(string) para definir el Titulo.";
        } else if ($this->numero == '' || $this->numero > '6' || $this->numero < 2) {
            return "Coloca un numero de tipo (string) despues del titulo separado por coma *new H('titulo','tama&nacute;o')*";
        }
    }
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