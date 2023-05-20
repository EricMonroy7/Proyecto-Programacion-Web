<?php   
       
    $consulta_sql="SELECT * FROM persona  WHERE no_cuenta =" .$no_cuenta;

        $resultado=$conexion->query($consulta_sql);
        
        $count=mysqli_num_rows($resultado);
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
            </tr>
     <?php   
            if ($count>0){
        
            while($row=mysqli_fetch_assoc($resultado) ){
        
                echo "<tr>";
                echo "<td>".$row['nombre_usuario']."</td>";
                echo "<td>".$row['carrera']."</td>";
                echo "<td>".$row['no_cuenta']."</td>";
                echo "<td>".$row['direccion']."</td>";
                echo "<td>".$row['telefono']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['fecha_registro']."</td>";
                echo "<td>".$row['permisos']."</td>";
                

                echo "</tr>";
            } 
            
        
        
            }else{
        
                echo "<h1>Sin registro</h1>";
            }
        
        
        ?>
        <a href="eliminar.php"><h2 >Eliminar Usuario</h2></a>    
        
        </table>        


