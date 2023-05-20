<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>
<style>
    .titulo{
        text-align: center;
        color: red;
        border: 2px solid black;
    }

    .formulario{
        text-align: center;
        color: blueviolet;
        font-size: 2em;
    }
</style>
<body>
    <h1   class="titulo" >Eliminar Usuario</h1>
    <form  class="formulario" action="logica/delete.php" method="post">

        <input type="text" name="id" placeholder="ID de Usuario">
        <br>
        <button type="submit" >Eliminar Usuario</button>

    </form>

    <a href="Principal.php"><h2 >Regresar a listas</h2></a>
</body>
</html>