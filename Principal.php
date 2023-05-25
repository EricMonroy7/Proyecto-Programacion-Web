<?php
session_start();
include "./logica/conexion.php";
$no_cuenta= $_SESSION['usermane'];

if(!isset($no_cuenta)){

        header("location: index.php");
}else{
    
    $consulta_sql="SELECT * FROM persona  WHERE no_cuenta =" .$no_cuenta;

    $resultado=$conexion->query($consulta_sql);
    
    $count=mysqli_num_rows($resultado);
    $row=mysqli_fetch_assoc($resultado);


    echo "<center> <h1> HOLA BIENVENIDO: ".$row['nombre_usuario']." </h1></center>  ";
//listar registros            
    include "logica/logicaListado.php";
  
}

?>