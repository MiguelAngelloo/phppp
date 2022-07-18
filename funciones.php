<?php

function saludarNombre(){
    echo "ola miguel uwu";
}

function saludar(){
    echo "Hola";
}

function despedir($nombre, $apellido){
    echo "Adios " . $nombre. " ". $apellido;
}


saludar();
saludarNombre();
echo "<br>";
despedir("miguel", "rodriguez");



?>