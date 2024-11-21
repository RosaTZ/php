<?php
$cantantes = ['2pac', 'Drake', 'Selena', 'Adele'];

 asort($cantantes);
 var_dump($cantantes);

 //Añadir elementos

 $cantantes[] = "Natos";
array_push($cantantes, 'Waor');

// Eliminar elementos
 array_pop($cantantes);
 unset($cantantes[2]);

 //sacar elementos aleatoriamente

 $indice = array_rand($cantantes);
 echo $cantantes[$indice];

 //dar vuelta al array

 var_dump(array_reverse($cantantes));

 //buscar dentro de un array
echo "rta";
echo "</br>";
 $rta = array_search('Selena', $cantantes);
 echo $rta;
 echo "</br>";
 var_dump($rta);
 echo $cantantes[$rta];

 //contar el numero de elementos
 echo "</br>";
 echo count($cantantes);
 echo "</br>";
 echo sizeof($cantantes);
 ?>