<?php
session_start();
if(!isset($_SESSION['nombre'])){
    echo "<script> alert('Bienvenid@'+nombre);</script>";
    header("location:inicio.php");
}
echo "Ingreso incorrecto";
?>