<?php

// unset($_COOKIE['micookie']);
setcookie('micookie','',time()-100);
header('location: ver_cookies.php')
?>

