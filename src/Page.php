<?php

namespace Rmo\Syntaxsanctuary;

require_once 'Head.php';
require_once 'Body.php';

class Page
{
    private Head $head;
    private Body $body;
    private string $lang;

    public function __construct(string $title, string $lang = 'es')
    {
        $this->head = new Head($title);
        $this->body = new Body();
        $this->lang = $lang;
    }

    public function addMeta(array $attributes): void
    {
        $this->head->addMeta($attributes);
    }

    public function addLink(array $attributes): void
    {
        $this->head->addLink($attributes);
    }

    public function setStyle(string $css): void
    {
        $this->head->setStyle($css);
    }

    public function render(): string
    {
        $html = "<!DOCTYPE html>\n";
        $html .= "<html lang=\"" . $this->lang . "\">\n";
        $html .= $this->head->render() . "\n";
        $html .= $this->body->render() . "\n";
        $html .= "</html>";
        return $html;
    }
}
