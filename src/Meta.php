<?php

namespace Rmo\Syntaxsanctuary;

require_once 'Html.php';

class Meta
{
    private Html $html;

    public function __construct()
    {
        $this->html = new Html();
    }

    public function render(array $attributes): string
    {
        return $this->html->createElement('meta', $attributes);
    }
}
