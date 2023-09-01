<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/perfil.css">
    <title>Tu perfil</title>

</head>
<body onload="document.forms['noRag'].submit()">
<?php  $usuario=$_POST['user'];       $contra=$_POST['pass'];       $server="LOCALHOST";       $user="root";       $password="";       $Db="comercio";       $conexion= mysqli_connect($server, $user, $password, $Db) or die('error'); $sql= "SELECT * from usuarios where usuario='$usuario' AND contrasenia='$contra'";       $sql2= "SELECT id from usuarios where usuario='$usuario' AND contrasenia='$contra'";       $consulta= mysqli_query($conexion, $sql);       $consulta2= mysqli_query($conexion, $sql2);       $registro= mysqli_fetch_array($consulta2);          if(mysqli_num_rows($consulta)==0){        ?>
            <form name="noRag" action="registros.php" method="post">
            <input type="hidden" name="noReg">
            <input type="submit">
            </form>
        <?php       }else{
                    if (isset($_POST['id'])) {               $id=$_POST['id'];           }else{               $id = $registro['id'];           }       ?>
    <header>                
                        <div class="contHeader">
                            <label>Logo</label>
                            <?php echo'<label>Hola '.$usuario.'</label>'?>
                        </div>
                        <div class="perfil">
                        <input type="checkbox" class="perfilBoton" onchange="toggleModificarPerfil(this)">
                            <img src="iconos/usuario (5).png" alt="userIMG">
                        </div>
            <!-- <button type="submit"><img src="imagenes/flechas/bigUP.png" alt="" srcset=""></button> -->        
    </header>

    <div class="todo">

            <div class="menu">
                <div class="secciones">
                    <div class="seccion">
                        <img src="iconos/forma-cuadrada-negra-redondeada.png" alt="cuadrado">                        
                    </div>
                    <div class="seccion">
                        <img src="iconos/silueta-de-forma-circular.png" alt="circulo">                        
                    </div>
                    <div class="seccion">
                        <img src="iconos/triangulo.png" alt="triangulo">                        
                    </div>
                </div>
                <div class="contMenu">
                    <div class="opciones">
                        <img src="iconos/hogar.svg" alt="home">
                        <img src="iconos/aplicaciones.svg" alt="apps">
                        <img src="iconos/marcador.svg" alt="guardado">
                        <img src="iconos/carrito-de-compras.svg" alt="shop">
                        <img src="iconos/corazon.svg" alt="favs">
                        <img src="iconos/usuarios.svg" alt="friends">
                    </div>
                    <div class="configuracion">
                        <img src="iconos/ajustes.svg" alt="ajus">
                    </div>
                </div>
            </div>

            <div class="feed">
                <div class="publicaciones">
                    <div class="top">
                        <label>user-87564545</label>
                        <img src="imagenes/wallpaper/1.jpg" alt="1">
                    </div>
                    <div class="top">
                        <label>user-46243424</label>
                        <img src="imagenes/wallpaper/2.jpg" alt="2">
                    </div>
                    <div class="top">
                        <label>user-375343523</label>
                        <img src="imagenes/wallpaper/3.jpg" alt="3">
                    </div>
                    <div class="top">
                        <label>user-42345695</label>
                        <img src="imagenes/wallpaper/4.jpg" alt="4">
                    </div>
                    <div class="top">
                        <label>user-245676523</label>
                        <img src="imagenes/wallpaper/5.jpg" alt="5">
                    </div>
                    <div class="top">
                        <label>user-7543545335</label>
                        <img src="imagenes/wallpaper/6.jpg" alt="6">
                    </div>
                </div>
                <div class="rangos">
                    <div class="top">
                        <img src="iconos/arriba.png" alt="up">
                        <label>1</label>
                        <img src="iconos/abajo.png" alt="down">
                    </div>
                    <div class="top">
                        <img src="iconos/arriba.png" alt="up">
                        <label>2</label>
                        <img src="iconos/abajo.png" alt="down">
                    </div>
                    <div class="top">
                        <img src="iconos/arriba.png" alt="up">
                        <label>3</label>
                        <img src="iconos/abajo.png" alt="down">
                    </div>
                    <div class="top">
                        <img src="iconos/arriba.png" alt="up">
                        <label>4</label>
                        <img src="iconos/abajo.png" alt="down">
                    </div>
                    <div class="top">
                        <img src="iconos/arriba.png" alt="up">
                        <label>5</label>
                        <img src="iconos/abajo.png" alt="down">
                    </div>
                    <div class="top">
                        <img src="iconos/arriba.png" alt="up">
                        <label>6</label>
                        <img src="iconos/abajo.png" alt="down">
                    </div>
                    
                </div>
            </div>
            
            <div class="modificarPerfil">
                        <form action="" method="post">
                            <div class="perfil">
                                <div class="foto">                                
                                    <img src="iconos/usuario (5).png" alt="userIMG">                                        
                                    <label>Subir imagen de perfil</label>                                                                        
                                    <input type="file" class="file">
                                </div>                                
                            </div>
                            <div class="modificar">
                                <input type="text" name="nUser" id="nUser" placeholder="ingrese el nuevo nombre de usuario">                      
                                <input type="text" name="nPass" id="nPass" placeholder="ingrese la nueva contraseña" >                                                            
                                <input type="text" name="nPassAct" id="nPassAct" placeholder="ingrese la contraseña actual">                                
                                <input type="hidden" name="user" value=<?php echo $usuario;?>>
                                <input type="hidden" name="pass" value=<?php echo $contra;?>>
                                <input type="hidden" name="id" value=<?php echo $id;?>>
                                <div class="botonEditar">
                                    <input type="submit" class="actualizarBoton" name="Editar" value="Actualizar Datos">
                                </div>
                            </div>
                            
                        </form>
                        <form action="" method="post">
                        <input type="hidden" name="user" value=<?php echo $usuario?>>
                        <input type="hidden" name="pass" value=<?php echo $contra?>>
                        <input type="hidden" name="id" value=<?php echo $id?>>
                            <div class="botonBorrar">                                
                                <input type="submit" name="Borrar" value="Borrar Cuenta">
                            </div>    
                            
                        </form>
                    <?php
                                /*comienza el borrar usuario*/
                                if (isset($_POST['Borrar'])) {
                                    $sql3= "DELETE from usuarios where id = '$id' ";
                                    $eliminar= mysqli_query($conexion, $sql3);
                                    $insertar= mysqli_query($conexion, $sql3)? print("<script>alert('borrado'); window.location = 'index.php'</script>"): print('error');
                                    }
                                /*termina el borrar usuario*/
                            
                            /*empieza el editar usuario*/
                            
                            /*if (isset($_GET['editar'])) {            $editar = $_POST['editar'];            $sql2= "SELECT * FROM usuarios WHERE id= '$id'";            $buscar= mysqli_query($conexion, $sql2);              $registro = mysqli_fetch_assoc($buscar);            ?>                <div class="cambiarPerfil"><form action="" method="post">                <label for="user">inserte el nombre nuevo</label>                    <input type="text" name="nombre_nuevo" value=<?php echo $registro['usuario']; ?> id="user" required>                <label for="pass">ingrese la contraseña nueva</label>                <input type="text" name="contrasenia_nuevo" value=<?php echo $registro['contrasenia'];?> id="pass" required>                <input type="submit" name="modificar" value="modificar">                </form></div>        <?php        }       */
                            if (isset($_POST['Editar'])) {            $nUsuario=$_POST['nUser'];     $contrasenia_original=$_POST['nPassAct'];       $nContra=$_POST['nPass'];            ?>            <input type="hidden" name="user" value=<?php echo $nUsuario;?>>            <input type="hidden" name="pass" value=<?php echo $nContra;?>>            
                            <?php
                            $verificacion = mysqli_fetch_array($consulta);
                            if($nUsuario == NULL && $nContra != NULL && $verificacion['contrasenia'] == $contrasenia_original) {
                                $sql_usuario = "UPDATE usuarios SET contrasenia = '$nContra' WHERE id = '$id'";
                                $insertar=mysqli_query($conexion, $sql_usuario)? print("<script>alert('Usuario editado, vuelva a iniciar sesion'); window.location = 'index.php'</script>") : print('Error al editar');
                            }
                            if($nContra == NULL && $nUsuario != NULL && $verificacion['contrasenia'] == $contrasenia_original) {
                                $sql_contra = "UPDATE usuarios SET usuario = '$nUsuario' WHERE id = '$id'";
                                $insertar=mysqli_query($conexion, $sql_contra)? print("<script>alert('Usuario editado, vuelva a iniciar sesion'); window.location = 'index.php'</script>") : print('Error al editar');
                            }
                            if($verificacion['contrasenia'] == $contrasenia_original && $nUsuario != NULL && $nContra != NULL) {
                                $sql = "UPDATE usuarios SET usuario = '$nUsuario', contrasenia = '$nContra' WHERE id = '$id'";            $insertar= mysqli_query($conexion, $sql) ? print("<script>alert('Usuario editado, vuelva a iniciar sesion'); window.location = 'index.php'</script>") : print('Error al editar');
                            }
                                    }
                            /*termina el editar usuario*/
                        }
                    ?>
            </div>
    </div>    
</body>
</html>