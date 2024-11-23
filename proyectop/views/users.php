<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="../controllers/users.php" method="POST">
        <label for="name">Nombre</label>
        <input type="text" name="name" placeholder="Ingrese el Nombre">

        <label for="surname">Apellidos</label>
        <input type="text" name="surname" placeholder="Ingrese los apellidos">

        <label for="age">Edad</label>
        <input type="text" name="age" placeholder="Ingrese su edad">

        <label for="genre">Genero</label>
        <input type="text" name="genre" placeholder="Ingrese su genero">

        <label for="phone">Telefono</label>
        <input type="text" name="phone" placeholder="Ingrese el Telefono">

        <label for="email">Correo Electronico</label>
        <input type="email" name="email" placeholder="Ingrese el Correo Electronico">

        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Ingrese la contaseña">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>