<?php

namespace Rmo\Syntaxsanctuary\Tests;

use PHPUnit\Framework\TestCase;
use Rmo\Syntaxsanctuary\Parrafo;

class ParrafoTest extends TestCase
{
    public function testCrearParrafo(): void
    {
        // 1. Instanciamos la clase de producción (autoloading en acción)
        $parrafo = new Parrafo("Bienvenido/a A TFH|SyntaxSanctuary");
        
        // 2. Realizamos la prueba
        $resultado = $parrafo->render();

        // 3. Afirmamos que el resultado es el esperado
        $this->assertEquals("<p>Bienvenido/a A TFH|SyntaxSanctuary</p>", $resultado);

        //#######################################PRUEBA 2

        // 1. Instanciamos la clase de producción (autoloading en acción)
        $parrafo = new Parrafo("Bienvenido/a A TFH|SyntaxSanctuary");
        
        // 2. Realizamos la prueba
        $resultado = $parrafo->render(['class' => 'parrafo']);

        // 3. Afirmamos que el resultado es el esperado
        $this->assertEquals('<p class="parrafo">Bienvenido/a A TFH|SyntaxSanctuary</p>', $resultado);

        //#######################################PRUEBA 3
        
        // 1. Instanciamos la clase de producción (autoloading en acción)
        $parrafo = new Parrafo("Bienvenido/a A TFH|SyntaxSanctuary");
        
        // 2. Realizamos la prueba
        $resultado = $parrafo->render(['id' => 'parrafo']);

        // 3. Afirmamos que el resultado es el esperado
        $this->assertEquals('<p id="parrafo">Bienvenido/a A TFH|SyntaxSanctuary</p>', $resultado);

        //#######################################PRUEBA 4
        
        // 1. Instanciamos la clase de producción (autoloading en acción)
        $parrafo = new Parrafo("Bienvenido/a A TFH|SyntaxSanctuary");
        
        // 2. Realizamos la prueba
        $resultado = $parrafo->render(['style' => 'color:green;']);

        // 3. Afirmamos que el resultado es el esperado
        $this->assertEquals('<p style="color:green;">Bienvenido/a A TFH|SyntaxSanctuary</p>', $resultado);
    }
}