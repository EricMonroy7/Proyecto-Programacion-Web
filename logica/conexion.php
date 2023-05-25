<?php

$host_db = "localhost";
$user_db = "id20311365_root";
$pass_db = "123456789.1As";
$db_name = "id20311365_eliminar";


$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}

?>