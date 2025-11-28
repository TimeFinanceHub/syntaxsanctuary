<?php

namespace Rmo\Syntaxsanctuary\Tests;

use PHPUnit\Framework\TestCase;
use Rmo\Syntaxsanctuary\Page;

class PageTest extends TestCase
{
    public function testRender()
    {
        $page = new Page('My Test Page', 'en');
        $rendered = $page->render();

        $this->assertStringContainsString('<!DOCTYPE html>', $rendered);
        $this->assertStringContainsString('<html lang="en">', $rendered);
        $this->assertStringContainsString('<head>', $rendered);
        $this->assertStringContainsString('<title>My Test Page</title>', $rendered);
        $this->assertStringContainsString('</head>', $rendered);
        $this->assertStringContainsString('<body>', $rendered);
        $this->assertStringContainsString('</body>', $rendered);
        $this->assertStringContainsString('</html>', $rendered);
    }
}
