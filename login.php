<!DOCTYPE html>
<html lang="es">  
<head>    
    <title>PractiCeneval</title>    
    <meta charset="UTF-8">
    <link href="estilos.css" rel="stylesheet" type="text/css"/>    
</head>  
<body>
    <form action="validacion_login.php" id="formulario_login" method="POST">
        <h1>Login</h1>    
        <table id="table_login">
            <tr>
                <td><input type="text" placeholder="Nombre de usuario" name="user"></td>
            </tr>
            <tr>
                <td><input type="password" placeholder="Contraseña" name="pass"></td>
            </tr>
        </table>
        <input type="submit" value="Aceptar"> 
    </form>    
</body>
</html>  
