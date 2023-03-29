<?php
include("conexion.php");
$con=Conexion();
$iden=$_POST["id"];
$name=$_POST["name"];
$contra=$_POST["password"];
$valido="SELECT*FROM usuarios WHERE nombre='$name'";
$resultado=mysqli_query($con,$valido);
$name1=mysqli_fetch_assoc($resultado);
if(empty($name1['nombre'])){
    echo "<script> alert('Usuario no reconocido');window.location='index.php';</script>";
} else{
    $contraencri= $name1['contrasena'];
    if(password_verify($contra,$contraencri)){
        session_start();
        $_SESSION['user']="$name";
        header("location:user.php");
        exit();
    } else{
        echo "<script> alert('Error al ingresar usuario o contraseña');window.location='index.php';</script>";
    }
}
?>