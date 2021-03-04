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

    ##VALIDACION CONTRASEÑA
    if($pass == $pass1){
        ##INGRESAR DATOS PERSONA A LA BASE DE DATOS
        $consulta="INSERT INTO Alumno (usuario,contrasena) VALUES ('$user','$pass')";
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
?>
</body>
</html>