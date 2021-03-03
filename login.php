<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'ceneval');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from form 
$user = mysqli_real_escape_string($db,$_POST['user']);
$pass = mysqli_real_escape_string($db,$_POST['pass']); 
$sql = "SELECT id FROM admin WHERE username = '$user' and passcode = '$pass'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];      
$count = mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count == 1) {
    session_register("user");
    $_SESSION['login_user'] = $myusername;  
    header("location: examen.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>
<!DOCTYPE html>
<html lang="es">  
<head>    
    <title>PractiCeneval</title>    
    <meta charset="UTF-8">
    <link href="estilos.css" rel="stylesheet" type="text/css"/>    
</head>  
<body>
    <form action="" id="formulario_login" method="POST">
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