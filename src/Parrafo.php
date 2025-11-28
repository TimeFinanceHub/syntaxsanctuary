<?php

namespace Rmo\Syntaxsanctuary;

require_once 'Html.php';

class Parrafo
{
    private Html $html;
    private string $content;

    public function __construct(string $content, bool $raw = false)
    {
        $this->html = new Html();
        $this->content = $raw ? $content : htmlspecialchars($content, ENT_QUOTES | ENT_HTML5, 'UTF-8', false);
    }

    public function render(array $attributes = []): string
    {
        return $this->html->createElement('p', $attributes, $this->content);
    }
}