<?php

require_once '../../vendor/autoload.php';

use Rmo\Syntaxsanctuary\Tituloh1;
use Rmo\Syntaxsanctuary\H;
use Rmo\Syntaxsanctuary\Parrafo;

header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    echo json_encode(['error' => 'Invalid input']);
    exit;
}

$elementType = $input['element-type'] ?? null;
$content = $input['content'] ?? '';
$attributesStr = $input['attributes'] ?? '{}';

$attributes = json_decode($attributesStr, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(['error' => 'Invalid JSON attributes']);
    exit;
}

$html = '';
$element = null;

try {
    switch ($elementType) {
        case 'Tituloh1':
            $element = new Tituloh1($content);
            break;
        case 'H':
            $hLevel = $input['h-level'] ?? '2';
            $element = new H($content, $hLevel);
            break;
        case 'Parrafo':
            $element = new Parrafo($content);
            break;
        default:
            echo json_encode(['error' => 'Invalid element type']);
            exit;
    }

    if ($element) {
        $html = $element->render($attributes);
    }

    echo json_encode(['html' => $html]);

} catch (Exception $e) {
    echo json_encode(['error' => 'An error occurred: ' . $e->getMessage()]);
}
