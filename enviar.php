<?php
include("conexion.php");
$con=Conexion();
$id=$_POST["id"];
$nombre=$_POST["name"];
$pass=$_POST["password"];
$passhash=password_hash("$pass",PASSWORD_DEFAULT);
$ingresar= "INSERT INTO usuarios (id, nombre,contrasena) VALUES ('$id','$nombre','$passhash')";
if (mysqli_query($con,$ingresar)){
    echo "<script>
    window.location.href = 'index.php'; </script>";
}
?>