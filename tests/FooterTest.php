<?php

namespace Rmo\Syntaxsanctuary\Tests;

use PHPUnit\Framework\TestCase;
use Rmo\Syntaxsanctuary\Footer;

class FooterTest extends TestCase
{
    public function testRender()
    {
        $footer = new Footer();
        $expected = '<footer><div class="container"><p class="nombre-pie"><span class="nombre-completo">World Wide Web</span><span class="nombre-abreviado">www</span></p><div class="info-autoria"><hr style="border-top: 1px solid #1f242d; margin: 10px auto; width: 50%;" />Autoría Intelectual y Colaboración:<br />Autor: Ramiro G Glez. | Codificador y creador de ideas base en código: Gemini Flash 2.5</div></div></footer>';
        $this->assertEquals($expected, $footer->render());
    }
}
