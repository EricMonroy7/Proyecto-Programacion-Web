<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo_login.css">
    <title>ELIMINAR</title>
</head>
<style>
    .titulo{
        text-align: center;
        color: GREEN;
        border: 4px solid black;
        background-color: rgb(59, 255, 163);
     position: relative;
   
    padding: 17px;
    width: 280px;
    
    }

    .formulario{
        text-align: center;
        color: blueviolet;
        font-size: 2em;
    }
</style>
<STYLE>A {text-decoration: none;} </STYLE>

<body class=fondo>
   <center>  <h1  class="titulo" >ELIMINAR USUARIO</h1></center> 
    <form  class="formulario" action="logica/delete.php" method="post">

        <input type="text" name="id" placeholder="ID de Usuario">
        <br>
        <button type="submit" >ELIMINAR USUARIO</button>
<br>
    </form>
    <br>
    <br>
    <br>
    <center> 
    <button><a href="../Principal.php"><h2 >REGRESAR A LISTAS</h2></a></button>
    </center> 
     <br>
</body>
</html>