<?php

namespace Rmo\Syntaxsanctuary\Tests;

use PHPUnit\Framework\TestCase;
use Rmo\Syntaxsanctuary\Link;

class LinkTest extends TestCase
{
    public function testRender()
    {
        $link = new Link();
        $attributes = ['rel' => 'stylesheet', 'href' => 'style.css'];
        $expected = '<link rel="stylesheet" href="style.css" />';
        $this->assertEquals($expected, $link->render($attributes));
    }
}
