<?php

namespace Rmo\Syntaxsanctuary\Tests;

use PHPUnit\Framework\TestCase;
use Rmo\Syntaxsanctuary\Header;

class HeaderTest extends TestCase
{
    public function testRender()
    {
        $header = new Header();
        $expected = <<<HTML
<header>
    <section class="seccion-heroe">
        <div class="container">
            <h1>
                <span class="nombre-completo">La Infraestructura de Internet</span>
                <span class="nombre-abreviado">Internet</span>
            </h1>
            <h2>Tu Relevancia Digital Comienza Ahora</h2>
            <p>Visión: El mundo digital e Internet de principio a fin.</p>
        </div>
    </section>
</header>
HTML;
        $this->assertXmlStringEqualsXmlString($expected, $header->render());
    }
}
