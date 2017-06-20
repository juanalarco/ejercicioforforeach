<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de usuario</title>

  <body>
    <div>
      <h2>Formulario de Login</h2>
      <form method="post" action="loginForm.php">
        <label for="fname">usuario</label>
        <input type="text"  name="usuario">

        <br>
        <br>

        <label for="numeroabonado">numeroabonado</label>
        <input type="text"  name="numeroabonado">
        <br>

        <br>

        <input type="hidden" name="accion" value="login">
        <input type="submit" value="login">
        <a href="login.php"><input type="button" value="registrar" /></a>
      </form>
      <?php
    if (isset($_POST['usuario']) && isset($_POST['numeroabonado'])) {
      include 'modelo/usuarios.php';
      include 'seguridad/SesionUsuario.php';
      $usuario = new usuario();
      $sesion = new Seguridad();
      $registrado=$usuario->buscarUsuario($_POST['usuario']);
      if ($registrado!=null) {
        //Si la contraseña que ponemos para conectarnos es la misma que tenemos en la
        //base de datos entonces el usuario se puede loguear

          echo "Usuario logueado";
          $sesion->addUsuario($registrado['usuario']);

        }else {
          echo "Usuario o contraseña incorrectas";
        }
      }else {
        echo "Usuario no encontrado";
      }

     ?>

  </body>
</html>
