<?php

$server = "localhost";
$user = "root";
$pass = "";
$DB = "base_py_bd1";

$conexion = new mysqli($server, $user, $pass, $DB) ;

if ($conexion-> connect_errno){

    die("Conexion Fallida". $conexion->connect_errno);
}else {
    
}

?>