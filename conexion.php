<?php
define("SERVIDOR","localhost");
define("USUARIO","root");
define("CLAVE","");
define("BASE_DATOS","nuevo");
function Conexion()
{
    if(!($con=mysqli_connect(SERVIDOR,USUARIO,CLAVE,BASE_DATOS)))
    {
        echo "Error conectando a la base de datos";
        exit();
    }
    if(!mysqli_select_db($con,BASE_DATOS))
    {
        echo "Hay un error en la conexión a la base de datos";
        exit();
    }
    return $con;
}
?>
