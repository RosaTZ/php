<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes en PHP</title>
</head>
<body>
   <?php
   //include  //Si se pone mal la direccion de la pagina el resto del codigo se ejecuta sin problema (aun asi muestra el error)
   //include_once  //no permite poner dos veces el mismo include
   //require   //es mas extricto, el codigo deja de funcionar y solo muestra el error
   //require_one  //no permite poner dos veces el mismo require
   include 'includes/cabecera.php';
   ?>

    <!-- contenido -->

    <div>
        <h2>Esta es la pagina de inicio</h2>
        <p>Texto de prueba de la pàgina de inicio</p>
        <hr>
    </div>

    <?php
   include 'includes/footer.php';
   ?>
</body>
</html>