<?php
function Conectarse()
{
    if(!($link=mysqli_connect("localhost","root","","ceneval")))
    {
        echo "Error conectando a la base de datos.";
        exit();
    }
    return $link;
}
?>