<!DOCTYPE html>
<html lang="es">  
<head>    
    <title>PractiCeneval</title>    
    <meta charset="UTF-8">
    <link href="estilos.css" rel="stylesheet" type="text/css"/>    
</head>  
<body>
    <form action="validacion_registro.php" id="formulario_registro" method="POST">
        <h1>Sign up</h1>    
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
</body>
</html>  