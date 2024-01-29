<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba BBDD</title>
</head>
<body>
       
       <!-- <br>  -->
       <div class="login">
	<h1>Login</h1>
    <form method="post" action="<?php echo base_url('articulos/alta_articulo')?>">
    	<input type="text" name="usuario" placeholder="usuario" required="required" />
        <br>
        <input type="password" name="password" placeholder="password" required="required" />
        <button  type="submit" class="btn btn-primary btn-block btn-large" >Entrar </button>

       
    </form>
 
                    <div class="registrate">
                            <a href="<?php echo base_url('usuarios/crear_usuario')?>">Registrate</a></a>
                    </div>
        
</body>
</html>