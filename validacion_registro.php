<?php
                ##CONEXION A BD
                function Conectarse(){
                    if(!($link=mysqli_connect("localhost","root","","horoscopo"))){
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
                        alert("Registro Exitoso");
                        mysqli_close($link);
                        header('Location: login.php');
                        }
                }
                else{
                    alert("Las contraseñas no coinciden");
                    header('Location: registro.php');
                    }
?>