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
    $query = 'SELECT id_pregunta,area,pregunta,opcionA, opcionB, opcionC, opcionD, opcionE, justificacion FROM examen';
    $total = 'SELECT COUNT(*) FROM examen ';

    $result = mysqli_query($link,"SELECT COUNT(*) FROM examen");
    $row=mysqli_fetch_array($result);
    $resultado= $row['COUNT(*)'];
    $num_pregunta = mt_rand ( 1 , $resultado );
?>   
    <form id="formulario_examen" action="examen_validacion.php" method="POST">  
        <table id="table_examen">
            <?php foreach ($link->query("SELECT * from examen WHERE id_pregunta  ='$num_pregunta' ") as $row) { ?>
            <tr>
                <td><p>Pregunta</p></td>
                <td><input type="text" name="numero_p" value="<?php echo $row['id_pregunta']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $row['pregunta']; ?></td>
            </tr>
            <tr>
                <td><?php echo $row['opcionA']; ?></td>
                <td><input type="radio" name="opcion" value="A" autocomplete="off"></td>
            </tr>
            <tr>
                <td><?php echo $row['opcionB']; ?></td>
                <td><input type="radio" name="opcion" value="B" autocomplete="off"></td>
            </tr>
            <tr>
                <td><?php echo $row['opcionC']; ?></td>
                <td><input type="radio" name="opcion" value="C" autocomplete="off"></td>
            </tr>
            <tr>
                <td><?php echo $row['opcionD']; ?></td>
                <td><input type="radio" name="opcion" value="D" autocomplete="off"></td>
            </tr>
            <tr>
                <td><?php echo $row['opcionE']; ?></td>
                <td><input type="radio" name="opcion" value="E" autocomplete="off"></td>
            </tr>
            <?php }
            mysqli_close($link);
            ?>
        </table>
        <input type="submit" value="Validar" id='boton_validacion'> 
        <br>
        <a href='puntuacion.php'><input type="button" value="Terminar practica" id='boton_validacion'></a>
    </form>    
</body>
</html>  