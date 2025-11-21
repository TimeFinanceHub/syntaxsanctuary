<?php

// Usamos el namespace de desarrollo (Rmo\Syntaxsanctuary\Tests\)
namespace Rmo\Syntaxsanctuary\Tests;

// Importamos la clase de producción que queremos probar
use PHPUnit\Framework\TestCase;
use Rmo\Syntaxsanctuary\Calculadora; // Esta clase viene del autoload de 'src/'

class CalculadoraTest extends TestCase
{
    public function testLaSumaFuncionaCorrectamente(): void
    {
        // 1. Instanciamos la clase de producción (autoloading en acción)
        $calc = new Calculadora();
        
        // 2. Realizamos la prueba
        $resultado = $calc->sumar(5, 3);

        // 3. Afirmamos que el resultado es el esperado
        $this->assertEquals(8, $resultado);
    }
}