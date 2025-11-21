<?php

namespace Rmo\Syntaxsanctuary\Tests;

use PHPUnit\Framework\TestCase;
use Rmo\Syntaxsanctuary\Tituloh1;

class Tituloh1Test extends TestCase
{
    public function testCrearh1(): void
    {
        // 1. Instanciamos la clase de producción (autoloading en acción)
        $titulo = new Tituloh1("hello world");
        
        // 2. Realizamos la prueba
        $resultado = $titulo->titulo();

        // 3. Afirmamos que el resultado es el esperado
        $this->assertEquals("<h1>hello world</h1>", $resultado);

        //#######################################PRUEBA 2

        // 1. Instanciamos la clase de producción (autoloading en acción)
        $titulo = new Tituloh1("hello world");
        
        // 2. Realizamos la prueba
        $resultado = $titulo->titulo(class:"titulo");

        // 3. Afirmamos que el resultado es el esperado
        $this->assertEquals("<h1 class='titulo'>hello world</h1>", $resultado);

        //#######################################PRUEBA 3
        
        // 1. Instanciamos la clase de producción (autoloading en acción)
        $titulo = new Tituloh1("hello world");
        
        // 2. Realizamos la prueba
        $resultado = $titulo->titulo(id:"titulo");

        // 3. Afirmamos que el resultado es el esperado
        $this->assertEquals("<h1 id='titulo'>hello world</h1>", $resultado);

        //#######################################PRUEBA 4
        
        // 1. Instanciamos la clase de producción (autoloading en acción)
        $titulo = new Tituloh1("hello world");
        
        // 2. Realizamos la prueba
        $resultado = $titulo->titulo(style:"color:green;");

        // 3. Afirmamos que el resultado es el esperado
        $this->assertEquals("<h1 style='color:green;'>hello world</h1>", $resultado);
    }
}