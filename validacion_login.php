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

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $resultado = mysqli_query($link,"SELECT * FROM Alumno WHERE usuario='$user' and contrasena='$pass'");
    $consulta = mysqli_fetch_array($resultado);
    if($consulta){
        header("Location:examen.php");
    }
    else{
        echo "<p>Error, Usuario/Contraseña incorrectos<p>";
        echo "<p><a href='login.php'>Volver a intentarlo</a><p>";
    }
    mysqli_close($link);
?>   
</body>
</html>  