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
    session_start();

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $_SESSION['user'] = $user;

    $resultado = mysqli_query($link,"SELECT * FROM Alumno WHERE usuario='$user' and contrasena='$pass'");
    $consulta = mysqli_fetch_array($resultado);
    if($consulta){
        header("Location:examen.php");
    }
    else{
        echo "<p class='index'>Error, Usuario/Contraseña incorrectos<p>";
        echo "<a href='login.php'><input type='button' value='Volver a intentarlo' id='boton_validacion'></a>";
    }
    mysqli_close($link);
?>   
</body>
</html>  