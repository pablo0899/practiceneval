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
?>     
    <form id="formulario_examen">
        <?php foreach ($link->query("SELECT * from alumno WHERE id  =1 ") as $row) { ?>
        <h1>Puntuación general</h1>    
        <p><strong><?php echo $row['usuario']; ?></strong> Has obtenido un total de <strong><?php echo $row['correctas']; ?></strong> respuestas correctas de <strong><?php echo ($row['correctas'] + $row['incorrectas']); ?></strong> respuestas totales.</p>
        <p>Obtuviste una puntuación de</p>
        <p><strong><?php echo ($row['correctas'] * 10) / ($row['correctas'] + $row['incorrectas']); } mysqli_close($link);?></strong></p>
        <a href="index.php"><input type="button" value="Salir" id='boton_validacion'></a>
    </form>
</body>
</html>  