<?php

class Usuarios extends db
{
  function __construct()
  {
    //De esta forma realizamos la conexion a la base de datos
    parent::__construct();
  }
function ListarUsuarios(){
  //construimos la consulta
  //tenemos que utilizar el foreach
    $sql="SELECT * from usuarios";
    $resultado=$this->ListarUsuarios($sql);
    if($resultado!=null){
      //montamos la tabla de resultado
      $tabla=[];
      while ($fila=$resultado->fetch_assoc()) {
        $tabla[]=$fila;
      }
      return $tabla;
    }else{
      return null;
    }
  }
}

 ?>
