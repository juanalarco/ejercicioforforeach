<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="css.css">
  </head>
  <body>
    <div>
      <h2>Formulario de Login</h2>
      <form method="post" action="login.php">
        <label for="fname">nombre</label>
        <input type="text"  name="nombre"

        <label for="numeroabonado">Numero Abonado</label>
        <input type="text"  name="numeroabonado">

        <input type="hidden" name="accion" value="login">
        <input type="submit" value="login">

      </form>
      <?php
    if (isset($_POST['nombre']) && isset($_POST['numeroabonado'])) {
    }
     ?>

  </body>
</html>
