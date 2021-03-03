<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>PractiCeneval 8</title>
</head>
<body>
    <?php
                ##CONEXION A BD
                function Conectarse(){
                    if(!($link=mysqli_connect("localhost","root","","ceneval"))){
                        echo "Error conectando a la base de datos.";
                        exit();
                    }
                    return $link;
                }
                $link=Conectarse();
                ##DATOS PERSONA
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $pass1 = $_POST['pass1'];

                ##VALIDACION CONTRASEÑA
                if($pass == $pass1){
                    ##INGRESAR DATOS PERSONA A LA BASE DE DATOS
                    $consulta="INSERT INTO Alumno (usuario,contraseña) VALUES ('$user','$pass')";
                    if(mysqli_query($link,$consulta)){
                        echo "Usuario registrado";
                        echo "<BR>";
                        echo "<a href='index.php'>Regresa al menú principal</a>";
                    }
                }
                else{
                        echo "<br>Usuario no registrado";
                        echo "<BR>";
                    }
                mysqli_close($link);
    ?>
</body>
</html>
