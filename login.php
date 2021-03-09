<!DOCTYPE html>
<html lang="es">  
<head>    
    <title>PractiCeneval</title>    
    <meta charset="UTF-8">
    <link href="estilos3.css" rel="stylesheet" type="text/css"/>    
</head>  
<body id="body_login">
    <div class="cuadro2">
        <form action="validacion_login.php" id="formulario_login" method="POST">
            <div class="cuadro">
                <header>
                    <h1>Login</h1> 
                </header> 
            </div>  
            <table id="table_login">
                <tr>
                    <td><input type="text" placeholder="Nombre de usuario" name="user"></td>
                </tr>
                <tr>
                    <td><input type="password" placeholder="Contraseña" name="pass"></td>
                </tr>
            </table>
            <input type="submit" value="Aceptar"> 
            <a href='index.php'><input type='button' value='Menú principal' id='boton_validacion'></a>
        </form>    
    </div>
</body>
</html>  