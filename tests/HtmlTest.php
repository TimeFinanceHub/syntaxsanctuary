<?php

namespace Rmo\Syntaxsanctuary\Tests;

use PHPUnit\Framework\TestCase;
use Rmo\Syntaxsanctuary\Html;

class HtmlTest extends TestCase
{
    public function testCreateElement()
    {
        $html = new Html();
        
        // Test with content
        $element1 = $html->createElement('p', ['class' => 'text-center'], 'Hello World');
        $expected1 = '<p class="text-center">Hello World</p>';
        $this->assertEquals($expected1, $element1);

        // Test without content (self-closing)
        $element2 = $html->createElement('br', [], '');
        $expected2 = '<br />';
        $this->assertEquals($expected2, $element2);
        
        // Test with no attributes
        $element3 = $html->createElement('div', [], 'Just a div');
        $expected3 = '<div>Just a div</div>';
        $this->assertEquals($expected3, $element3);
    }
}
