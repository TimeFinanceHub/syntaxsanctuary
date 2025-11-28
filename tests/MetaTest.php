<?php

namespace Rmo\Syntaxsanctuary\Tests;

use PHPUnit\Framework\TestCase;
use Rmo\Syntaxsanctuary\Meta;

class MetaTest extends TestCase
{
    public function testRender()
    {
        $meta = new Meta();
        $attributes = ['charset' => 'UTF-8'];
        $expected = '<meta charset="UTF-8" />';
        $this->assertEquals($expected, $meta->render($attributes));

        $attributes2 = ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0'];
        $expected2 = '<meta name="viewport" content="width=device-width, initial-scale=1.0" />';
        $this->assertEquals($expected2, $meta->render($attributes2));
    }
}
