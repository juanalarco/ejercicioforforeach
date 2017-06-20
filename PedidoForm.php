<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de pedidos</title>
    <link rel="stylesheet" href="css.css">



  </head>
  <body>

      <h2>Formulario de registro de pedidos</h2>
      <form method="post" action="pedido.php">


<br>
        <label for="fname">Nombre</label>
        <input type="text"  name="nombre">
<br>
<br>
        <label for="lname">Apellidos</label>
        <input type="text"  name="apellidos">
<br>
<br>
Talla
<br>
<option>Elige una talla </option>
              <?php
              $resultado=$usuario->ListarTallas();
                foreach ($resultado as $fila) {
              ?>
              <option value="<?php echo $fila['nombre']; ?>"><?php echo $fila['nombre']; ?></option>
            <?php } ?>
<br>
<br>

        <label for="user">numerocamisetas</label>
        <input type="text"  name="numerodecamisetas">
<br>
<br>

<br>

<br>
<br>
        <input type="hidden" name="accion" value="registro">

        <input type="submit" value="Registrar">
      </form>
      <?php
      $comprobacion=0;
      //Tienen que estar todos los campos rellenados para hacer el resgistro
      if (isset($_POST['talla']) && isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['numerodecamisetas']) ) {
        include 'usuario.php';
        $usuario = new Usuario();
        //Si el email ya esta registrado salta el mensaje
        $tabla=$usuario->ComprobarNombre($_POST['nombre']);
        if ($tabla==null) {
          echo "El nombre ya esta registrado.";
        }else {
          //Las contraseñas tienen que ser iguales
        //  if ($_POST['pass']==$_POST['pass1']) {
            //Llamada a la funcion de insertarUsuario donde tienen que estar todos los campos de la base de datos
            $resultado=$usuario->insertarUsuario($_POST["nombre"], $_POST["apellidos"],$_POST["talla"],$_POST["numero"],$_POST["precio"]);
            if ($resultado==null) {
              echo "efv Error";
            }else {
              echo "Registro correcto";
              echo "<br>";
              echo "<a href='loginForm.php'>IR A LOGIN</a>";
              }
            }
        }
       ?>
  </body>
</html>
