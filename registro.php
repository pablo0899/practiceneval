<!DOCTYPE html>
<html lang="es">  
<head>    
    <title>PractiCeneval</title>    
    <meta charset="UTF-8">
    <link href="estilos3.css" rel="stylesheet" type="text/css"/>    
</head>  
<body id="body_registro">
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="login.php">Ingresar</a></li>
                <li><a href="registro.php">Registrarse</a></li>
                <li><a href="examen.html">Sobre el examen</a></li>
                <li><a href="contenido_examen.html">Contenido del examen</a></li>
            </ul>
        </nav>
    <div class= "cuadro2">
        <form action="validacion_registro.php" id="formulario_registro" method="POST">
            <header>
            <h1>Registro</h1> 
            </header>    
            <table id="table_registro">
                <tr>
                    <td><input type="text" placeholder="Nombre de usuario" name="user"></td>
                </tr>
                <tr>
                    <td><input type="password" placeholder="Contraseña" name="pass"></td>
                </tr>
                <tr>
                    <td><input type="password" placeholder="Confirme su contraseña" name="pass1"></td>
                </tr>
            </table>
            <input type="submit" value="Aceptar"> 
        </form>    
    </div>   
</body>
</html>  