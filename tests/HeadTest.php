<?php

namespace Rmo\Syntaxsanctuary\Tests;

use PHPUnit\Framework\TestCase;
use Rmo\Syntaxsanctuary\Head;

class HeadTest extends TestCase
{
    public function testRender()
    {
        $head = new Head('My Page');
        $head->addMeta(['charset' => 'UTF-8']);
        $head->addLink(['rel' => 'stylesheet', 'href' => 'style.css']);
        $head->setStyle('body { color: blue; }');

        $expected = <<<HTML
<head>
    <title>My Page</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <style>
body { color: blue; }
</style>
</head>
HTML;
        $this->assertEquals($expected, $head->render());
    }
}
