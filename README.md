# SyntaxSanctuary

SyntaxSanctuary is a PHP library for programmatically generating HTML elements. It provides a collection of classes that represent HTML tags, allowing you to build complex HTML structures in an object-oriented way.

## Features

-   **Object-Oriented HTML Generation:** Create HTML elements as objects.
-   **Component-Based Architecture:** Build complex UI components by composing smaller elements.
-   **Flexible and Extensible:** Easily create your own custom components.
-   **XSS Protection:** Automatic content escaping to prevent cross-site scripting attacks.

## New Classes for Page Composition

This library now includes a set of classes designed to build a complete HTML page from scratch.

-   `Html`: A versatile base class to create any HTML element.
-   `Meta`, `Link`, `Style`: Classes to generate the corresponding tags in the `<head>` section.
-   `Head`: Assembles the entire `<head>` section of the page.
-   `Tituloh1`, `H`, `Parrafo`: Classes for creating heading and paragraph tags.
-   `Card`: A reusable component for creating content cards.
-   `Header`, `Content`, `Footer`: Classes that represent the main semantic sections of a page.
-   `Body`: Assembles the `<body>` of the page.
-   `Page`: The main class that puts everything together to generate the final HTML document.

## How to Use

Here is an example of how to use the new page composition classes to build a complete web page:

```php
<?php
require_once 'vendor/autoload.php';

use Rmo\Syntaxsanctuary\Page;

// 1. Create a new page
$page = new Page('SYNTAXSANCTUARY');

// 2. Add metadata and stylesheets
$page->addMeta(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0']);
$page->addLink(['href' => 'https://fonts.googleapis.com/css2?family=Orbitron', 'rel' => 'stylesheet']);
$page->setStyle('body { font-family: "Orbitron", sans-serif; }');

// 3. Render the page
echo $page->render();
```

This will generate a complete HTML5 page with the specified title, metadata, and styles. The body of the page is pre-defined with the layout you provided.

## Development

### Dependencies

This project uses [Composer](https://getcomposer.org/) to manage dependencies. To install the dependencies, run:

```bash
composer install
```

### Testing

The project uses [PHPUnit](https://phpunit.de/) for testing. To run the test suite, execute the following command:

```bash
./vendor/bin/phpunit tests/
```

This will run all the tests in the `tests` directory and provide a report of the results.

## Contributing

Contributions are welcome! Please feel free to submit a pull request or open an issue.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.