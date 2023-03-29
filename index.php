<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="img/CONALEP_ESPECIAL.jpg" alt="Image">
        <div class="text">
          <span class="text-1">Bienvenidos <br> Conalep ÁO I</span>
          <span class="text-2">Estadistica 911</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Inicia sesión</div>
          <form action="validar.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="id" placeholder="Ingresa ID" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Ingresa nombre de usuario" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Ingresa contraseña" required>
              </div>
              <div class="button input-box">
                <input type="submit" name="begin" value="Inicia sesión">
              </div>
              <div class="text sign-up-text">No tienes cuenta? <label for="flip">Registrate aquí</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Registro de usuarios</div>
        <form action="enviar.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="id" placeholder="Ingresa ID" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Ingresa nombre de usuario" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Ingresa contraseña" required>
              </div>
              <div class="button input-box">
                <input type="submit" name="ingreso" value="Registrate">
              </div>
              <div class="text sign-up-text">Ya tienes cuenta? <label for="flip">Inicia sesión</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>