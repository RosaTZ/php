<?php
$peliculas = array('Batman', 'SpiderMan', 'El señor de los anillos');
$cantantes = ['2pac', 'drake', 'Selena'];

echo $peliculas[0];
echo "</br>";
echo $cantantes[2];
echo "</br>";


echo "</br>";
echo "</br>";
echo "Con for";
echo "</br>";
for($i = 0; $i < count($peliculas); $i++){
    echo "</br>";
echo $peliculas[$i];
}

echo "</br>";
echo "</br>";
echo "con foreach";
echo "</br>";
foreach ($cantantes as $i) {
    echo "</br>";
    echo $i;   
}

//Array asignativo

$personas = [
    'nombre' => 'Rosy',
    'apellidos' => 'Torres',
    'edad' => 24
];

echo $personas['nombre'];



//multidimensionales

$contactos = [
[
    'nombre' => 'Antonio',
    'email' => 'antonio@antonio.com',
],
[
    'nombre' => 'Luis',
    'email' => 'luis@luis.com',
],
[
    'nombre' => 'Maria',
    'email' => 'maria@maria.com',
],
[
    'nombre' => 'Bella',
    'email' => 'bella@bella.com',
]
];

echo $contactos[1]['nombre'];
echo $contactos[2]['email'];
?>