<?php

namespace Rmo\Syntaxsanctuary\Tests;

use PHPUnit\Framework\TestCase;
use Rmo\Syntaxsanctuary\Style;

class StyleTest extends TestCase
{
    public function testRender()
    {
        $css = 'body { color: red; }';
        $style = new Style($css);
        $expected = "<style>\nbody { color: red; }\n</style>";
        $this->assertEquals($expected, $style->render());
    }
}

