<?php

namespace Rmo\Syntaxsanctuary\Tests;

use PHPUnit\Framework\TestCase;
use Rmo\Syntaxsanctuary\H;

class HTest extends TestCase
{
    public function testCrearTitulo(): void
    {
        // 1. Instanciamos la clase de producción (autoloading en acción)
        $titulo = new H("hello world","2");
        
        // 2. Realizamos la prueba
        $resultado = $titulo->titulo();

        // 3. Afirmamos que el resultado es el esperado
        $this->assertEquals("<h2>hello world</h2>", $resultado);

        //#######################################PRUEBA 2

        // 1. Instanciamos la clase de producción (autoloading en acción)
        $titulo = new H("hello world","3");
        
        // 2. Realizamos la prueba
        $resultado = $titulo->titulo(class:"titulo");

        // 3. Afirmamos que el resultado es el esperado
        $this->assertEquals("<h3 class='titulo'>hello world</h3>", $resultado);

        //#######################################PRUEBA 3
        
        // 1. Instanciamos la clase de producción (autoloading en acción)
        $titulo = new H("hello world","4");
        
        // 2. Realizamos la prueba
        $resultado = $titulo->titulo(id:"titulo");

        // 3. Afirmamos que el resultado es el esperado
        $this->assertEquals("<h4 id='titulo'>hello world</h4>", $resultado);

        //#######################################PRUEBA 4
        
        // 1. Instanciamos la clase de producción (autoloading en acción)
        $titulo = new H("hello world","5");
        
        // 2. Realizamos la prueba
        $resultado = $titulo->titulo(style:"color:green;");

        // 3. Afirmamos que el resultado es el esperado
        $this->assertEquals("<h5 style='color:green;'>hello world</h5>", $resultado);
    }
}