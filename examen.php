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
?>   
    <form id="formulario_examen">    
        <table id="table_examen">
            <?php foreach ($link->query('SELECT * from examen') as $row) { ?>
            <tr>
                <td><p>Pregunta</p></td>
                <td><?php echo $row['id_pregunta']; ?></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $row['pregunta']; ?></td>
            </tr>
            <tr>
                <td><?php echo $row['opcionA']; ?></td>
                <td><input type="radio" name="opcion"></td>
            </tr>
            <tr>
                <td><?php echo $row['opcionB']; ?></td>
                <td><input type="radio" name="opcion"></td>
            </tr>
            <tr>
                <td><?php echo $row['opcionC']; ?></td>
                <td><input type="radio" name="opcion"></td>
            </tr>
            <tr>
                <td><?php echo $row['opcionD']; ?></td>
                <td><input type="radio" name="opcion"></td>
            </tr>
            <?php }
            mysqli_close($link);
            ?>
        </table>
        <input type="button" value="Validar" id='boton_validacion'> 
        <input type="button" value="Terminar practica" id='boton_validacion'>
    </form>    
</body>
</html>  