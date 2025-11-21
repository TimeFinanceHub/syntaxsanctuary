<?php

// El namespace debe coincidir con el prefijo + cualquier subdirectorio (en este caso, no hay subdirectorios)
namespace Rmo\Syntaxsanctuary;

class Calculadora
{
    /**
     * Suma dos números.
     * @param int $a
     * @param int $b
     * @return int
     */
    public function sumar(int $a, int $b): int
    {
        return $a + $b;
    }
}