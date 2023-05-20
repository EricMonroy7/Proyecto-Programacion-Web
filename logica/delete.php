<?php
include "conexion.php";
$registro=$_POST['id'];

$consulta="DELETE FROM persona WHERE numero = ".$registro;

mysqli_query($conexion,$consulta);
header('Location: ../eliminar.php');

?>