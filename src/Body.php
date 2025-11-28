<?php

namespace Rmo\Syntaxsanctuary;

require_once 'Header.php';
require_once 'Content.php';
require_once 'Footer.php';

class Body
{
    private Header $header;
    private Content $content;
    private Footer $footer;
    private Html $html;

    public function __construct()
    {
        $this->header = new Header();
        $this->content = new Content();
        $this->footer = new Footer();
        $this->html = new Html();
    }

    public function render(): string
    {
        $bodyContent = $this->header->render() . $this->content->render() . $this->footer->render();
        return $this->html->createElement('body', [], $bodyContent);
    }
}
