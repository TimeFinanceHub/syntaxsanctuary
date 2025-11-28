<?php

namespace Rmo\Syntaxsanctuary;

class Html
{
    protected string $content;

    public function __construct(string $content = '')
    {
        if ($content == '') {
            echo "El contenido no puede estar vacío.";
        } else {
            $this->content = htmlspecialchars($content, ENT_QUOTES | ENT_HTML5, 'UTF-8', false);
        }
    }

    public function render(string $tag, string $class = '', string $id = '', string $style = ''): string
    {
        $attributes = '';
        if ($class != '') {
            $attributes .= " class='" . $class . "'";
        }
        if ($id != '') {
            $attributes .= " id='" . $id . "'";
        }
        if ($style != '') {
            $attributes .= " style='" . $style . "'";
        }
        return "<" . $tag . $attributes . ">" . $this->content . "</" . $tag . ">";
    }
}
