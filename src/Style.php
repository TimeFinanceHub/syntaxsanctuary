<?php

namespace Rmo\Syntaxsanctuary;

class Style
{
    private string $css;

    public function __construct(string $css)
    {
        $this->css = $css;
    }

    public function render(): string
    {
        return "<style>\n" . $this->css . "\n</style>";
    }
}
