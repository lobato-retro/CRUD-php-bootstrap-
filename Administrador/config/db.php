<?php

$host="localhost";
$db="sitio";
$usuario="root";
$contraseña="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$db",$usuario,$contraseña);
    

} catch ( Exception $ex) {

    echo $ex->getmessage();
}

?>