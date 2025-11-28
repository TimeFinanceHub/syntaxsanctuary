<?php

namespace Rmo\Syntaxsanctuary\Tests;

use PHPUnit\Framework\TestCase;
use Rmo\Syntaxsanctuary\Content;

class ContentTest extends TestCase
{
    public function testRender()
    {
        $content = new Content();
        $rendered = $content->render();

        $this->assertStringContainsString('<section class="seccion-contenido container">', $rendered);
        $this->assertStringContainsString('<h2><em>Misi&oacute;n:</em></h2>', $rendered);
        $this->assertStringContainsString('<div class="grid-contenido">', $rendered);
        $this->assertStringContainsString('<div class="tarjeta" id="camino-digital">', $rendered);
        $this->assertStringContainsString('<h3>🚀 El Camino de la Relevancia Digital</h3>', $rendered);
        $this->assertStringContainsString('<h3>🏗️ GitHub</h3>', $rendered);
    }
}
