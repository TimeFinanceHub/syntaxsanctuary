<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TFH | SyntaxSanctuary</title>
    </head>
    <body>
        <?php
            // The autoloader should be required from the root of your project
            require 'vendor/autoload.php';
        
            use Rmo\Syntaxsanctuary\Tituloh1;
            use Rmo\Syntaxsanctuary\H;
            use Rmo\Syntaxsanctuary\Parrafo;
            
            $titulo = new Tituloh1("Ramiro G Glez Freelancer");
            // Use the render() method, and pass attributes as an array if needed
            echo $titulo->render();
            
            $tituloH = new H("Dise&ntilde;o y Desarrollo Web Freelancer","2");
            echo $tituloH->render();
            
            $p = new Parrafo("Albuquerque , New Mexico");
            echo $p->render();
            
            $servicios = new H ("Mis Servicios","2");
            echo $servicios->render();
            
            $dweb = new H ("Dise&ntilde;o Web","3");
            echo $dweb->render();
        ?>
    </body>
</html>
