<?php   
       include "conexion.php";
    $consulta_sql="SELECT * FROM persona";  

        $resultado=$conexion->query($consulta_sql);
        
        $count=mysqli_num_rows($resultado);
 ?>      
 <link rel="stylesheet" href="../estilo_login.css">
 <body class=fondo>
        <table border="4px"> 
            <tr class=Tabla>

                <th>Nombre Usuario</th>
                <th>Carrera</th>
                <th>Numero de cuenta</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Fecha de registro</th>
                <th>Permisos</th>
                
            </tr>
            </body>
            <style>
            .Tabla{
    background-color: white;
    border: 2px solid #E1E1E1;
    }
    </style>
     <?php   
            if ($count>0){
        
            while($row=mysqli_fetch_assoc($resultado) ){
        
                echo "<tr class=Tabla>";

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
        <STYLE>A {text-decoration: none;} </STYLE>
        <center> 
        <button><a href="eliminar.php"><h2>ELIMINAR USUARIO</h2></a></button> 
        <button><a href='logica/salir.php'> <h2>SALIR</h2></a></button>
        <button><a href='logica/actualizar.php'> <h2>ACTUALIZAR</h2></a></button>
        <button><a href='logica/edicion.php'> <h2>EDITAR</h2></a></button>
       </center> 
       <br>
        </table>        

