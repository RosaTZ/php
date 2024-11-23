<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login.css">
    <title>Ingreso usuario</title>
</head>
<body>
    <?php
   include 'header.php';
   ?>
    <form action="../controllers/userslogin.php" method="POST" class="login">
        <label for="user">Usuario o Correo</label>
        <input type="text" name="user">

        <label for="passwd">Contaseña</label>
        <input type="password" name="passwd">

        <input type="submit" value="Ingresar">
    </form>

    <?php
   include 'footer.php';
   ?>
</body>
</html>