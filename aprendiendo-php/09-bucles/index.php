<?php
//while

$numero = 12;

// while($number <= 100){
// echo "<p>$number</p>";
// $number++;
// }

// echo "<hr>";

// if(isset($_GET['numero'])){
// $numero = $_GET['numero'];
// }else{
//     $numero = 1;
// }

// var_dump($numero);


echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador = 0;
while($contador <= 12){
echo "$numero x $contador = ".($numero*$contador) ."</br>";
$contador++;
}

echo "<hr>";
// do while
$edad = 18;
$contador = 1;

do{
echo "Tienes acceso al local privado $contador </br>";
$contador++;
}while($edad >= 18 && $contador <= 10);
?>