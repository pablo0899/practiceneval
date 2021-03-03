<!DOCTYPE html>
<html lang="es">  
<head>    
    <title>PractiCeneval</title>    
    <meta charset="UTF-8">
    <link href="estilos.css" rel="stylesheet" type="text/css"/>    
</head>  
<body>
    <form id="formulario_examen">    
        <table id="table_examen">
            <tr>
                <td><p>Pregunta</p></td>
                <td><input type="text" value="NO. PREG"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" value="AQUI VA LA PREGUNTA"></td>
            </tr>
            <tr>
                <td><input type="text" value="OPCION A"></td>
                <td><input type="radio" name="opcion"></td>
            </tr>
            <tr>
                <td><input type="text" value="OPCION B"></td>
                <td><input type="radio" name="opcion"></td>
            </tr>
            <tr>
                <td><input type="text" value="OPCION C"></td>
                <td><input type="radio" name="opcion"></td>
            </tr>
            <tr>
                <td><input type="text" value="OPCION D"></td>
                <td><input type="radio" name="opcion"></td>
            </tr>
        </table>
        <input type="button" value="Validar"> 
        <input type="button" value="Terminar practica">
    </form>    
</body>
</html>  