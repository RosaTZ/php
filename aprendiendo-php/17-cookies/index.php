<?php
// setcookie("nombre","Valor que solo puede ser texto", caducidad, ruta, dominio);

//cookie basica
setcookie("micookie", "Valor de mi galleta");
$_COOKIE;

//cokie con expiracion

setcookie("oneyear", "valor de mi cookie de 365 dias", time()+(60*60*24*365));

//cookie
?>

<a href="ver_cookies.php">Cookies</a>