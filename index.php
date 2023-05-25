<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../estilo_login.css">
    <title>Login con session</title>
</head>

<body class=fondo>
    
 <div>
    <header>
    </header>
</div>   

    <center> <h1> Inicia sesion</h1> </center> 
<div  >
     <center> 
        <form method="POST" action="logica/loguear.php">
            
            
 <div class="form-group">
            <input type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
            <br />
         </div>
   
            <br>
             <div class="form-group">
            <input type="text" name="clave" placeholder="Contraseña" />
             </div>

            <br /><br>

<div align="center">
            <button type="submit">Inicar Sesion</button>
</div>
        </form>
    </center> 
</div>
</body>

</html>