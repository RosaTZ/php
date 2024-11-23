<?php
require '../server.php';

//insersion de datos

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
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT) ;

    $query = "INSERT INTO users (name, surname, age, genre, phone, email, password ) VALUES ( '$name', '$surname', '$age', '$genre', '$phone', '$email', '$password')";

        
        $data = mysqli_query($coneccion, $query);
        
        if($data){
            echo "Datos insertados correctamente";
            header("Refresh: 5; URL=../views/content.php"); 
        }else{
            echo "Error: ".mysqli_error($coneccion);
        }
}else{
    echo "Revisa el codigo, algo esta mal";
}
?>