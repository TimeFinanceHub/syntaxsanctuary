<?php

namespace Rmo\Syntaxsanctuary\Tests;

use PHPUnit\Framework\TestCase;
use Rmo\Syntaxsanctuary\Card;

class CardTest extends TestCase
{
    public function testRender()
    {
        $card = new Card('My Card', '<p>Some content</p>', 'my-card');
        $expected = <<<HTML
<div class="tarjeta" id="my-card">
    <h3>My Card</h3>
    <p>Some content</p>
</div>
HTML;
        $this->assertXmlStringEqualsXmlString($expected, $card->render());
    }
}
