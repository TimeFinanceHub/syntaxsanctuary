<?php

namespace Rmo\Syntaxsanctuary;

class Html
{
    private array $selfClosingTags = ['br', 'hr', 'img', 'input', 'link', 'meta'];

    public function createElement(string $tag, array $attributes = [], string $content = ''): string
    {
        $attrs = '';
        foreach ($attributes as $key => $value) {
            $attrs .= " " . $key . '="' . htmlspecialchars($value, ENT_QUOTES | ENT_HTML5, 'UTF-8', false) . '"';
        }

        if (in_array($tag, $this->selfClosingTags)) {
            return "<" . $tag . $attrs . " />";
        }

        return "<" . $tag . $attrs . ">" . $content . "</" . $tag . ">";
    }
}
