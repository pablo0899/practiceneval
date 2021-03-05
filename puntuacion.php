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
    $user = $_SESSION['user'];
?>     
    <form id="formulario_examen">
        <?php 
            foreach ($link->query("SELECT * from alumno WHERE usuario  = '$user' ") as $row) { 
        ?>
        <h1>Puntuación general</h1>    
        <p>
            <strong>
                <?php echo $row['usuario']; ?>
            </strong> 
            Has obtenido un total de 
            <strong>
                <?php echo $row['correctas']; ?>
            </strong> 
            respuestas correctas de 
            <strong>
                <?php echo ($row['correctas'] + $row['incorrectas']); ?>
            </strong> 
            respuestas totales.
        </p>
        <p>
            Obtuviste una puntuación de
        </p>
        <p>
            <strong>
                <?php echo ($row['correctas'] * 10) / ($row['correctas'] + $row['incorrectas']); }?>
            </strong>
        </p>
        <table id="table_examen" class="puntajes">
        <tr>
            <th>Numero de pregunta</th>
            <th>Tu respuesta</th>
            <th>Respuesta correcta</th>
            <th>Justificación</th>
        </tr>
        <?php 
            foreach ($link->query("SELECT * from examen_alumno WHERE usuario  = '$user' ") as $row) { 
            $num = $row['id_pregunta'];
        ?>
        <tr>
            <td><?php echo $row['id_pregunta']; ?></td>
            <td><?php echo $row['respuesta_respondida']; ?></td>
            <td><?php echo $row['respuesta_correcta']; ?></td>
            <td><?php foreach ($link->query("SELECT justificacion from examen WHERE id_pregunta  = '$num' ") as $row) {echo $row['justificacion'];} ?></td>
        </tr>
        <?php 
            $reset= mysqli_query($link,"UPDATE alumno SET correctas = 0 WHERE usuario = '$user' ");
            $reset1= mysqli_query($link,"UPDATE alumno SET incorrectas = 0 WHERE usuario = '$user' ");
            $reset2= mysqli_query($link,"DELETE FROM examen_alumno WHERE usuario = '$user' ");  } mysqli_close($link); 
            session_destroy();
        ?>
        </table>
        <a href="index.php">
            <input type="button" value="Salir" id='boton_validacion'>
        </a>
    </form>
</body>
</html>  