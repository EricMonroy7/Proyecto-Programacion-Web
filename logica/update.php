<?php
include ("../conexion.php");

$nombre_usuario = $_POST["nombre_usuario"];
$carrera = $_POST['carrera'];
$no_cuenta = $_POST['no_cuenta'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email= $_POST['email'];
$password = $_POST['password'];
$fecha_registro = $_POST['fecha_registro'];
$permisos = $_POST['permisos'];


//actualizar los datos
$sql = "UPDATE persona SET nombre_usuario = '$nombre_usuario', carrera = '$carrera', direccion = '$direccion', 
telefono = '$telefono', email = '$email', `password` = '$password' , fecha_registro = '$fecha_registro', permisos = '$permisos'
WHERE no_cuenta = '$no_cuenta' ";

$consulta = mysqli_query($conexion, $sql);


if($consulta){
    echo"<script>alert('Se han guardado los cambios correctamente, actualice la pagina para continuar'); 
    window.location='index.php';</script>";
}else{
    echo"<script>alert('No se pudieron insertar los datos'); window.history.go(-1);</script>";
}

?>