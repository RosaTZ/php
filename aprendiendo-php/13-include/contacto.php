<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes en PHP</title>
</head>
<body>
   <?php
   include 'includes/cabecera.php';
   ?>

    <!-- contenido -->

    <div>
        <h2>Esta es la pagina de inicio</h2>
        <p>Texto de prueba de la pàgina de inicio</p>
        <hr>
    </div>

    <!-- pie de pagina -->

    <?php
   include 'includes/footer.php';
   ?>
</body>
</html>