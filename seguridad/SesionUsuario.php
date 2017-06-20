<?php
class sesionUsuario
{
private $usuario=null;
private $nombre;
private $apellidos;

function __construct(){
  session_start();
  if(isset($_SESSION["usuario"])) $this->usuario=$_SESSION["usuario"];
}
  public function getUsuario(){
    return $this->usuario;
    echo   $_SESSION["usuario"];
  }
  //OJO con SESSION En mayuscula siempre
 public function addUsuario($usuario)
  {
    $_SESSION["usuario"]=$usuario;
    $this->usuario=$usuario;
  }
}



?>
