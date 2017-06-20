<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de usuario</title>
    <link rel="stylesheet" href="css.css">

    <nav>
     <a href="loginForm.php">Inicio</a>
    </nav>

  </head>
  <body>

      <h2>Formulario de registro</h2>
      <form method="post" action="pedido.php">

<br>
<br>
        <label for="fname">Nombre</label>
        <input type="text"  name="nombre">
<br>
<br>
        <label for="lname">Apellidos</label>
        <input type="text"  name="apellidos">
<br>
<br>
        <label for="user">talla</label>
        <input type="text"  name="talla">
<br>
<br>
        <label for="user">numero</label>
        <input type="text"  name="numero">
<br>
<br>
        <label for="user">precio</label>
        <input type="text"  name="precio">
<br>
<br>

<br>
        <input type="hidden" name="accion" value="registro">

        <input type="submit" value="Registrar">
      </form>
      <?php
      $comprobacion=0;
      //Tienen que estar todos los campos rellenados para hacer el resgistro
      if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['talla']) && isset($_POST['numero']) && isset($_POST['precio'])) {
        include 'pedido.php';

        $usuario = new Pedidos();
        //Si el nombre ya esta registrado salta el mensaje
        $tabla=$usuario->ComprobarNombre($_POST['nombre']);
        if ($tabla==null) {
          echo "El nombre ya esta registrado.";
        }else {
          //Las contraseñas tienen que ser iguales
            //Llamada a la funcion de insertarUsuario donde tienen que estar todos los campos de la base de datos
            $resultado=$usuario->CrearPedido($_POST["nombre"], $_POST["apellidos"],$_POST["talla"],$_POST["numero"],$_POST["precio"]);
            if ($resultado==null) {
              echo "efv Error";
            }else {
              echo "Registro correcto";
              echo "<br>";
              }
            }
}
          ?>

          <table>
            <tr>
              <td>ID</td>
              <td>Nombre</td>
              <td>apellidos</td>
              <td>tallas</td>
              <td>numero</td>
              <td>precio</td>
            </tr>
            <?php
            //Reorrer todos los campos de la base de datos
         $tabla=$listado->ListaPedido();
         foreach ($tabla as $fila) {
           ?>
           <tr>
                 <td><?=$fila["id"]?></td>
                 <td><?=$fila["nombre"]?></td>
                 <td><?=$fila["apellidos"]?></td>
                 <td><?=$fila["talla"]?></td>
                 <td><?=$fila["numero"]?></td>
                 <td><?=$fila["precio"]?></td>
               </tr>
               <?php
         }
             ?>
          </table>


        }
       ?>
  </body>
</html>
