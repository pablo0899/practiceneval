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
    $num_preg = $_POST['numero_p'];
    $answer= $_POST['opcion'];

    session_start();
    $user = $_SESSION['user'];

    $resultado = mysqli_query($link,"SELECT respuesta_correcta FROM examen WHERE id_pregunta  ='$num_preg' and respuesta_correcta  ='$answer' ");
    $consulta = mysqli_fetch_array($resultado);

    foreach ($link->query("SELECT respuesta_correcta from examen WHERE id_pregunta  = '$num_preg' ") as $row) {
        $respuesta_correcta =  $row['respuesta_correcta'];
    } 

    $insertar="INSERT INTO examen_alumno (usuario,id_pregunta,respuesta_respondida,respuesta_correcta) VALUES ('$user','$num_preg','$answer','$respuesta_correcta')";
    mysqli_query($link,$insertar);


    if($consulta){
        $correcta= mysqli_query($link,"UPDATE alumno SET correctas = correctas+1 WHERE usuario = '$user' ");
        header("Location:examen.php");
    }
    else{
        $incorrecta=mysqli_query($link,"UPDATE alumno SET incorrectas = incorrectas+1 WHERE usuario = '$user' ");
        header("Location:examen.php");
    }
    mysqli_close($link);
?>   
</body>
</html>  