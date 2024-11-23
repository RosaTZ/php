<?php

echo "Hola!";
require '../server.php';

if(isset($_POST['name']) && isset($_POST['surname'])
&& isset($_POST['age']) && isset($_POST['genre']) && isset($_POST['phone']) 
&& isset($_POST['email']) && isset($_POST['password']))
{

 $name = $_POST['name'];
$surname = $_POST['surname'];
    $age = $_POST['age'];
      $genre = $_POST['genre'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
    $password = $_POST['password'];

    echo $password;

    $insert = "INSERT INTO users (
        name, 
        surname, 
        age, 
        genre, 
        phone, 
        email, 
        password
        ) 
        VALUES 
        (
        $name,
        $surname,
        $age,
        $genre,
        $phone,
        $email,
        $password)";
        
        $data = mysqli_query($coneccion, $insert);
        
        if($data){
            echo "Datos insertados correctamente";
            header("Refresh: 5; URL=../views/content.html"); 
        }else{
            echo "Error: ".mysqli_error($coneccion);
        }
}

?>