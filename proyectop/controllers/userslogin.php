<?php
require '../server.php';

if(isset($_POST['user']) && $_POST['passwd']){
    $user = $_POST['user'];
    $passwd = $_POST['passwd'];

    $passwordHashed = "SELECT password FROM users WHERE email = '$user'";
    
    $validPasswordHashed = mysqli_query($coneccion, $passwordHashed);

    while($pass = mysqli_fetch_assoc($validPasswordHashed)){
        $pass = $pass['password'];
        if(password_verify($passwd, $pass)){
            $query = "SELECT id, email, password FROM users WHERE email = '$user' AND password = '$pass'";
            var_dump($query);
            $data = mysqli_query($coneccion, $query);
            if($data){
                echo "Bienvenido $user";
                header("Refresh: 5; URL=../views/content.php"); 
            }else{
                echo "Error: ".mysqli_error($coneccion);
            }
        }else{
            echo "Datos incorrectos";
        }
    }
 
}else{
    echo 'Ocurrio un problema';
}

?>