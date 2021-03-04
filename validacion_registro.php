<!DOCTYPE html>
<html lang="es">
<head>
    <title>PractiCeneval</title>    
    <meta charset="UTF-8">
    <link href="estilos.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
    include("conexion.php");
    $link=Conectarse();
    ##DATOS PERSONA
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $pass1 = $_POST['pass1'];

    $resultado= mysqli_query($link,"SELECT * FROM alumno WHERE usuario='$user' ");

    if(!(mysqli_num_rows($resultado) > 0)){
        ##VALIDACION CONTRASEÑA
        if($pass == $pass1){
            ##INGRESAR DATOS PERSONA A LA BASE DE DATOS
            $consulta="INSERT INTO Alumno (usuario,contrasena,puntuacion,correctas,incorrectas) VALUES ('$user','$pass',0,0,0)";
            if(mysqli_query($link,$consulta)){
                echo "<p class='index'>Registro realizado correctamente. Ahora puedes iniciar sesion <p>";
                echo "<a href='login.php'><input type='button' value='Iniciar sesión' id='boton_validacion'></a>";
            }
        }
        else{
            echo "<p class='index'>Error, las contraseñas no coinciden<p>";
            echo "<a href='registro.php'><input type='button' value='Volver a intentarlo' id='boton_validacion'></a>";
        }
        mysqli_close($link);
    }
    else{
        echo "<p class='index'>Error, Ese nombre de usuario ya existe<p>";
        echo "<a href='registro.php'><input type='button' value='Volver a intentarlo' id='boton_validacion'></a>";
    }
?>
</body>
</html>