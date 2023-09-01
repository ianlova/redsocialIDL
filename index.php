<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/index.css">
    <title>nombrePagina - Iniciar Sesión</title>
    <?php
    $server="LOCALHOST";
    $user="root";
    $password="";
    $Db="comercio";
    $conexion= mysqli_connect($server, $user, $password, $Db) or die('error');
    ?>
</head>
<body>
    
    <form action="perfil.php" method="POST">
    <div class="contenedor">
        <div class="img">
            <img src="imagenes/inicioGIF.gif" alt="inicioGIF"> 
        </div>
        <div class="form">            
            <div class="inputs">
                <div class="label">
                    <label>Logo de empresa</label>
                </div>
                <input type="text" name="user" id="user" placeholder="Ingrese su usuario" required>
                <input type="password" name="pass" id="pass" placeholder="Ingrese su contraseña" required>
            </div>
            <div class="ingresar">
                <input type="submit" value="Iniciar Sesión" >
            </div>
            </form>
            <div class="registrarse">   
                <div class="regiscont">
                    <div class="label">
                        <label for="reg">¿No tiene cuenta?</label>                    
                    </div>             
                    <div class="a">
                        <a href="registros.php" id="reg">Regístrese</a>                                    
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- <?php
    // $sql= "SELECT * from usuarios where id = 10 ";
    // $consulta= mysqli_query($conexion, $sql);
    // $registro=mysqli_fetch_assoc($consulta);
    // print_r($registro);
?> -->

</body>
</html>