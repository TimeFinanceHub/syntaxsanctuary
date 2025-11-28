<?php

namespace Rmo\Syntaxsanctuary;

require_once 'Meta.php';
require_once 'Link.php';
require_once 'Style.php';

class Head
{
    private array $metas = [];
    private array $links = [];
    private ?Style $style = null;
    private string $title;

    public function __construct(string $title)
    {
        $this->title = htmlspecialchars($title, ENT_QUOTES | ENT_HTML5, 'UTF-8', false);
    }

    public function addMeta(array $attributes): void
    {
        $this->metas[] = $attributes;
    }

    public function addLink(array $attributes): void
    {
        $this->links[] = $attributes;
    }

    public function setStyle(string $css): void
    {
        $this->style = new Style($css);
    }

    public function render(): string
    {
        $metaGenerator = new Meta();
        $linkGenerator = new Link();

        $html = "<head>\n";
        $html .= "    <title>" . $this->title . "</title>\n";

        foreach ($this->metas as $meta) {
            $html .= "    " . $metaGenerator->render($meta) . "\n";
        }

        foreach ($this->links as $link) {
            $html .= "    " . $linkGenerator->render($link) . "\n";
        }

        if ($this->style) {
            $html .= "    " . $this->style->render() . "\n";
        }

        $html .= "</head>";
        return $html;
    }
}

