<?php
include "modelo/db.php";
/**
 *
 */
class Pedidos extends db
{
  function __construct()
  {
    //De esta forma realizamos la conexion a la base de datos
    parent::__construct();
  }
  //Insertamos un nuevo pedido
  function CrearPedido($id,$nombre,$apellidos,$talla,$numero,$precio,$sexo){
    //Construimos la consulta
    $sql="INSERT INTO pedidos (id,nombre,apellidos,talla,numero,precio,sexo)
          VALUES (NULL,'".$nombre."', '".$apellidos."', '".$talla."','".$numero."','".$precio."','".$sexo."')";


    //Realizamos la consulta
    // $resultado=$this->realizarConsulta($sql);
    // if($resultado!=false){
    //   //Recogemos el ultimo usuario insertado
    //   $sql="SELECT * from usuarios ORDER BY id DESC";
    //   //Realizamos la consulta
  //     $resultado=$this->realizarConsulta($sql);
  //     if($resultado!=false){
  //       return $resultado->fetch_assoc();
  //     }else{
  //       return null;
  //     }
  //   }else{
  //     return null;
  //   }
  // }
  //Devolvemos un nuevo usuario
  // function buscarUsuario($usuario){
  //   //Construimos la consulta
  //   $sql="SELECT * from usuarios WHERE usuario='".$usuario."'";
  //   //Realizamos la consulta
  //   $resultado=$this->realizarConsulta($sql);
  //   if($resultado!=false){
  //     if($resultado!=false){
  //       return $resultado->fetch_assoc();
  //     }else{
  //       return null;
  //     }
  //   }else{
  //     return null;
  //   }
  // }
  function ListaPedido(){
    //construimos la consulta
    //tenemos que utilizar el foreach
      $sql="SELECT * from pedidos ORDER BY id DESC";
      $resultado=$this->realizarConsulta($sql);
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
  // function mostrarInfo($usuario){
    //Construimos la consulta
  //   $sql="SELECT * from usuarios where usuario='".$usuario."'";
    // //Realizamos la consulta
    // $resultado=$this->realizarConsulta($sql);
    // if($resultado!=false){
    //   if($resultado!=false){
    //     return $resultado;
    //   }else{
    //     return null;
    //   }
    // }else{
    //   return null;
    // }
  // }
  // function actualizar($usuario,$nombre,$mail,$apellidos,$edad,$sexo){
  //   $sql="UPDATE usuarios set usuario='".$usuario."',nombre='".$nombre."', mail='".$mail."', apellidos='".$apellidos."',edad='".$edad."',sexo='".$sexo."' where usuario='".$usuario."'";
  //   $resultado=$this->realizarConsulta($sql);
  //   if ($resultado!=null) {
  //    return False;
  //   }
  // }
  //comprobamos el mail y si devuelve mas de una fila es que tiene mas de un mail y si da mas de uno salta el erro de mail utilizado
  // function ComprobarNombre($nombre){
  //  $sql="SELECT nombre from usuarios WHERE nombre='".$nombre."'";
  //  //Realizamos la consulta
  //  $resultado=$this->realizarConsulta($sql);
  //  if($resultado!=null){
  //    if ($resultado->num_rows>0) {
  //      return null;
  //    }else {
  //      return 1;
  //    }
//    }else{
//      return null;
//    }
//  }
}
 ?>
