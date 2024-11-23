<?php


$coneccion = mysqli_connect(
"localhost", "root", "", "phpsql"
);

if(mysqli_connect_errno()){
    echo "La coneccion a la base de datos ha fallado".mysqli_connect_errno();
}else{
    echo "conección realizada correctamente";
}

// consulta para configurar la codificacion de caracteres

mysqli_query($coneccion, "SET NAMES 'UTF-8'");

//consulta SELECT 
var_dump($coneccion);
$query = mysqli_query($coneccion, "SELECT * FROM notas");

// while($notas = mysqli_fetch_assoc($query)){
//     var_dump($notas);
// }

//insertar en la base de datos
$sql = "INSERT INTO notas (titulo, descripcion, color) VALUES ('nota3', 'insertando datos desde php', 'blue')";
$data = mysqli_query($coneccion, $sql);

if($data){
    echo "Datos insertados correctamente";
}else{
    echo "Error: ".mysqli_error($coneccion);
}

?>