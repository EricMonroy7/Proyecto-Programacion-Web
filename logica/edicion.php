<?php
include ("../conexion.php");

//Hace la consulta
$sql="SELECT * FROM persona";

 $consulta=$conexion->query($sql);

 $count=mysqli_num_rows($consulta);
?>
<table border="2px"> 
        <tr>
                <th>Nombre Usuario</th>
                <th>Carrera</th>
                <th>Numero de cuenta</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Fecha de registro</th>
                <th>Permisos</th>
                <th>Edicion</th>
        </tr>
    <?php
        if ($count>0){

            while($row=mysqli_fetch_assoc($consulta) ){

            echo "<tr>";

                echo "<td>".$row['nombre_usuario']."</td>";
                echo "<td>".$row['carrera']."</td>";
                echo "<td>".$row['no_cuenta']."</td>";
                echo "<td>".$row['direccion']."</td>";
                echo "<td>".$row['telefono']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['fecha_registro']."</td>";
                echo "<td>".$row['permisos']."</td>";
                echo "<td> <a href= actualizar.php?no_cuenta=" .$row['no_cuenta']. ">editar</a> |
                       <a href= eliminar.php?no_cuenta=" .$row['no_cuenta']. ">eliminar</a> </td> ";
                
            echo "</tr>";
            }
        } else{
        echo "<h1>Sin registro</h1>";
        }

    ?>
</table>
<br>
<button><a href="index.php">Regresar</a></button>