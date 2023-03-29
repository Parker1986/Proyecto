<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link rel="stylesheet" href="css/estilo1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<div class="login-box">
<img src="img/logo-conalep.png" class="img" alt="Image">
    <h1>Registro de usuarios</h1> 
    <form action="enviar.php" method="post">
      <!--ID USUARIO-->
      <label for="id">Id usuario</label>
      <input type="text" name="id" placeholder="Ingresa id" required>

      <!--USUARIO-->
      <label for="username">Nombre del usuario</label>
      <input type="text" name="name" placeholder="Ingresa el nombre del usuario" required>

      <!--CONTRASEÑA-->
      <label for="password">Contraseña</label>
      <input type="password" name="password" placeholder="Ingresa contraseña" required>
      <center><button type="submit" name="ingreso" value="enviar" class="btn btn-success">Registrate</button></center>
      <a href="index.php">Inicia sesion</a>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</div>
</form>
</body>
</html>