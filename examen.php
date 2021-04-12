<!DOCTYPE html>
<html lang="es">  
<head>    
    <title>PractiCeneval</title>    
    <meta charset="UTF-8">
    <link href="estilos3.css" rel="stylesheet" type="text/css"/>  
</head> 
<body id="body_examen">
<?php
    include("conexion.php");
    $link=Conectarse();
    $query = 'SELECT id_pregunta,area,pregunta,opcionA, opcionB, opcionC, opcionD, opcionE, justificacion FROM examen';
    $total = 'SELECT COUNT(*) FROM examen ';
    session_start();
    $user = $_SESSION['user'];

    $result = mysqli_query($link,"SELECT COUNT(*) FROM examen");
    $row=mysqli_fetch_array($result);
    $resultado= $row['COUNT(*)'];

    $num_pregunta = mt_rand(1, $resultado);

    $resultado1 = mysqli_query($link,"SELECT respuesta_respondida FROM examen_alumno WHERE id_pregunta  ='$num_pregunta'");
    $consulta1 = mysqli_fetch_array($resultado1);

    if($consulta1 == NULL){

?>   
<nav>
<tr>
    <th colspan="3">Hola <strong><?php echo $user;?></strong>, éxito</th>
</tr>
</nav>
    <div class="cuadro2">
        <form id="formulario_examen" action="examen_validacion.php" method="POST">  
            <table id="table_examen">
                <?php foreach ($link->query("SELECT * from examen WHERE id_pregunta  =' $num_pregunta' ") as $row) { ?>
                <tr>
                    <td><p>Pregunta</p></td>
                    <td><?php echo $row['id_pregunta']; ?></td>
                    <td class="pregunta_hidden"><input type="hidden" name="numero_p" value="<?php echo $row['id_pregunta']; ?>"></td>
                </tr>
                <tr>
                    <td><p>Area: </p></td>
                    <td><?php echo $row['area']; ?></td>
                </tr>
                <tr>
                    <td colspan="2"><?php echo $row['pregunta']; ?></td>
                </tr>
                <tr>
                    <td><?php echo $row['opcionA']; ?></td>
                    <td><input type="radio" name="opcion" id="opc" value="A" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><?php echo $row['opcionB']; ?></td>
                    <td><input type="radio" name="opcion" id="opc" value="B" autocomplete="off"></td>
                </tr>
                <tr>
                    <td><?php echo $row['opcionC']; ?></td>
                    <td><input type="radio" name="opcion" id="opc" value="C" autocomplete="off"></td>
                </tr>
                <tr>
                    <td><?php echo $row['opcionD']; ?></td>
                    <td><input type="radio" name="opcion" id="opc" value="D" autocomplete="off"></td>
                </tr>
                <?php  } }
                else{
                    $result1 = mysqli_query($link,"SELECT COUNT(*) FROM examen_alumno");
                    $row=mysqli_fetch_array($result1);
                    $resultado1= $row['COUNT(*)'];

                    if($resultado1 >= $resultado){
                        header("Location:puntuacion.php");
                    }
                    else{
                        header("Location:examen.php");
                    }
                }
                mysqli_close($link);
                ?>
            </table>
            <input type="submit" value="Siguiente pregunta" id='boton_validacion'> 
            <br>
            <a href='puntuacion.php'><input type="button" value="Terminar examen" id='boton_validacion'></a>
        </form>    
    </div> 
</body> 
</html>  