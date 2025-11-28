<?php

require_once '../vendor/autoload.php'; // Correct path to Composer autoloader
require_once 'menu.php'; // Include the menu generation class

use Rmo\Syntaxsanctuary\ExamplesMenu;

// Instantiate the menu
// Assuming this index.php is at project_root/ejemplos/
// The base URL for examples should be relative to your web server's root.
// For example, if your project is at http://localhost/syntaxsanctuary/
// and examples are at http://localhost/syntaxsanctuary/ejemplos/,
// then for links like 01-basico.php, the URL would be examples/01-basico.php.
// So, the baseUrl parameter should correctly reflect the path from the web root to the examples directory.
// For this context, assuming web root is one level above 'ejemplos'.
$menu = new ExamplesMenu('ejemplos/'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SyntaxSanctuary - Examples</title>
    <style>
        body {
            font-family: sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 960px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #0056b3;
            text-align: center;
            margin-bottom: 30px;
        }
        .examples-nav ul {
            list-style: none;
            padding: 0;
        }
        .examples-nav li {
            margin-bottom: 10px;
            background-color: #e9ecef;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .examples-nav li:hover {
            background-color: #d6d8db;
        }
        .examples-nav a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            display: block;
        }
        .examples-nav a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>SyntaxSanctuary Library Examples</h1>
        <p>Welcome to the SyntaxSanctuary examples page. Below you'll find a list of demonstrations showcasing various features of the library.</p>
        
        <?php echo $menu->render(); ?>
        
        <p>Click on any link above to see the example in action.</p>
    </div>
</body>
</html>
