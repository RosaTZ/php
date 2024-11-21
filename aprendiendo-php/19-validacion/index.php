<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios PHP</title>
</head>
<body>
    <h1>Validar formularios</h1>

<?php
if(isset($_GET['error'])){
    $error = $_GET['error'];
    if($error == 'Faltan Datos'){
echo '<strong style="color: red;">Introduce todos los datos</strong>';
    }
}
?>

    <form action="procesar_formulario.php" method="POST">
<label for="nombre">Nombre:</label><br>
<input type="text" name="nombre" id="" require="require" pattern="[A-Za-z]+"><br>

<label for="apellidos">Apellidos:</label><br>
<input type="text" name="apellidos" id="" require="require" pattern="[A-Za-z]+"><br>

<label for="edad">Edad:</label><br>
<input type="text" name="edad" id="" require="require" pattern="[0-9]+"><br>

<label for="email">Email:</label><br>
<input type="email" name="email" id="" require="require"><br>

<label for="pass">Password:</label><br>
<input type="password" name="pass" id=""><br>

<input type="submit" value="enviar">
    </form>
</body>
</html>