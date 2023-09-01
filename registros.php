<?php
$server="LOCALHOST";
    $user="root";
    $password="";
    $Db="comercio";
    $conexion= mysqli_connect($server, $user, $password, $Db) or die('error');

/* conexion */
    if (isset($_POST['noReg'])) {
        echo '<script>alert("El usuario ingresado no existe, cree uno");</script>';
    }
    
    if (isset($_POST['ok'])) {
        $usuario = $_POST['user'];
        $contra = $_POST['pass'];
        $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $resultado = mysqli_query($conexion, $consulta);
        if (mysqli_num_rows($resultado) > 0) {
            echo '<script>alert("El nombre de usuario ya existe, elija otro nombre.");</script>';
        } else {
            $sql = "INSERT INTO usuarios (usuario, contrasenia) VALUES ('$usuario', '$contra')";
            $insertar = mysqli_query($conexion, $sql) ? print("<script>alert('Registro insertado'); window.location = 'index.php';</script>") : print('Error al guardar');
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/registros.css">   
    <title>nombrePagina - Registrarse</title>    
</head>
<body>
<!--<a href="index.php"> volver al menu</a>-->

<!--comienza registro de usuario-->


<form action="" method="post">
    <div class="contenedor">
        
        <div class="form">
            <div class="inputs">
                <div class="label">
                    <label>Logo de empresa</label>
                </div>                
                <input type="text" name="user" id="user" placeholder="Escriba su usuario" required>                
                <input type="text" name="pass" id="pass" placeholder="Escriba su contraseña" required>            
            </div>

            <div class="registrarse">
                <input type="submit" name="ok" value="Registrarse">
            </div>

            <div class="ingresar">   
                <div class="ingcont">
                    <div class="label">
                        <label for="reg">¿Ya tiene cuenta?</label>                    
                    </div>             
                    <div class="a">
                        <a href="index.php" id="reg">INICIE Sesión</a>                                    
                    </div>
                </div>
            </div>
        </div>
        <div class="img">
            <img src="imagenes/registroGIF.gif" alt="registroGIF">
        </div>
    </div>
    </form>

</body>
</html>