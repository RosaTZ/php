<?php

if(isset($_COOKIE['micookie'])){
echo "<h1>".$_COOKIE['micookie']."</h1>";
}else{
    echo "No existe la cookie";
}
?>

<a href="borrar_cookies.php">Borrar mis cookies</a>