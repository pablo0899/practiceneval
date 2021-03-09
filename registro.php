<!DOCTYPE html>
<html lang="es">  
<head>    
    <title>PractiCeneval</title>    
    <meta charset="UTF-8">
    <link href="estilos3.css" rel="stylesheet" type="text/css"/>    
</head>  
<body id="body_registro">
    <div class= "cuadro2">
        <form action="validacion_registro.php" id="formulario_registro" method="POST">
            <header>
                <div class="cuadro">
                    <h1>Sign up</h1> 
                </div>
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
            <a href='index.php'><input type='button' value='Menú principal' id='boton_validacion'></a>
        </form>    
    </div>   
</body>
</html>  