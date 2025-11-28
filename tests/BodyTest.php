<?php

namespace Rmo\Syntaxsanctuary\Tests;

use PHPUnit\Framework\TestCase;
use Rmo\Syntaxsanctuary\Body;

class BodyTest extends TestCase
{
    public function testRender()
    {
        $body = new Body();
        $rendered = $body->render();

        $this->assertStringContainsString('<body>', $rendered);
        $this->assertStringContainsString('<header>', $rendered);
        $this->assertStringContainsString('<section class="seccion-contenido container">', $rendered);
        $this->assertStringContainsString('<footer>', $rendered);
        $this->assertStringContainsString('</body>', $rendered);
    }
}
