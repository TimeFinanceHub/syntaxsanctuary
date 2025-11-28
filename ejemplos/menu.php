<?php

namespace Rmo\Syntaxsanctuary;

// This class generates a navigation menu for the example files.
class ExamplesMenu
{
    private string $baseUrl;

    public function __construct(string $baseUrl = 'ejemplos/')
    {
        $this->baseUrl = $baseUrl;
    }

    public function render(): string
    {
        // Define the example files and their display names
        $examples = [
            '01-basico.php' => 'Basic Usage (H1, H, Parrafo)',
            '02-atributos.php' => 'Adding Attributes (Class, ID, Style)',
            '03-composicion.php' => 'Element Composition',
            '04-pagina-completa.php' => 'Full Page using Page Class',
            'tutorial-interactivo/index.php' => 'Interactive Tutorial',
            'fix_old_index.php' => 'Fix for Old Index.php Usage',
            'user_provided_index_fix.php' => 'User-Provided Index.php Fix',
            'user_root_index_fix.php' => 'User Root Index.php Fix (Final)',
        ];

        $menuHtml = '<nav class="examples-nav"><ul class="examples-list">';

        foreach ($examples as $file => $displayName) {
            if ($file === 'tutorial-interactivo/index.php') {
                $url = 'https://timefinancehub.com/syntaxsanctuary/ejemplos/ejemplos/tutorial-interativo/';
            } else {
                $url = $this->baseUrl . $file;
            }
            $menuHtml .= '<li><a href="' . htmlspecialchars($url) . '">' . htmlspecialchars($displayName) . '</a></li>';
        }

        $menuHtml .= '</ul></nav>';
        return $menuHtml;
    }
}
