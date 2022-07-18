<?php

//Bucle foreach

//array
$array[] = "chuplin";
$array[] = "caarl";
$array[] = "abdul";
$array[] = "iesto";
$array[] = "roberto";

foreach($array as $value){
    echo $value;
    echo "<br/>";
}


foreach($array as $key => $value){
    echo "posicion: " . $key . " el nombre es: " . $value;
    echo "<br/>";
}



//recorrer un array multidimensional

$notas = array(
    '0' => array('materia' => "Ingles", "nombre" => "chupin", "nota" => 2.5),
    '1' => array('materia' => "Español", "nombre" => "caarl", "nota" => 3.0),
    '2' => array('materia' => "Matematicas", "nombre" => "abdul", "nota" => 4.5),
    '3' => array('materia' => "alegbra avanzada", "nombre" => "iesto", "nota" => 2.0),
);

echo "---------------------------------------------------------------";
echo "<br/>";

foreach($notas as $key => $value){
    echo "la materia: " . $value["materia"]. " Persona: " . $value["nombre"]. " la nota es: " . $value["nota"];
    echo "<br/>";
}




?>