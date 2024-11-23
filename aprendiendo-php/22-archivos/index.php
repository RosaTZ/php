<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="archivo">
<input type="submit" value="enviar">

    </form>

    <h1>Listado de imagenes</h1>
    <?php

    $gestor = opendir('./images');

    if($gestor){
        while(($image = readdir($gestor)) !== false){
            if($image != '.' && $image != '..'){
                echo "<img src='images/$image' width='200px' height='200px' alt=''/>";
            }
        }
    }
    ?>
</body>
</html>