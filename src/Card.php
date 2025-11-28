<?php

namespace Rmo\Syntaxsanctuary;

require_once 'Html.php';
require_once 'H.php';
require_once 'Parrafo.php';

class Card
{
    private Html $html;
    private string $title;
    private string $content;
    private string $id;

    public function __construct(string $title, string $content, string $id = '')
    {
        $this->html = new Html();
        $this->title = $title;
        $this->content = $content;
        $this->id = $id;
    }

    public function render(): string
    {
        $h3 = $this->html->createElement('h3', [], $this->title);
        
        $attributes = ['class' => 'tarjeta'];
        if ($this->id) {
            $attributes['id'] = $this->id;
        }

        return $this->html->createElement('div', $attributes, $h3 . $this->content);
    }
}
