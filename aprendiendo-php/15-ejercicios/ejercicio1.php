<?php
$numeros = [10, 30, 5, 18, 7, 30, 71, 20];


for($i = 0; $i < count($numeros); $i++){
    echo "</br>";
    echo $numeros[$i];
}
echo "</br>";
echo "</br>";
echo "Ordenarlo";
echo "</br>";

asort($numeros);
var_dump($numeros);

echo "</br>";
echo "Longitud";
echo "</br>";
echo sizeof($numeros);

echo "</br>";
echo "Buscar";
echo "</br>";

$buscar = array_search(20, $numeros);
echo "</br>";
echo "El número $numeros[$buscar] se encuentra en el indice $buscar";

?>