<?php

    $tablas = array("primera"=>5,"segunda"=>13,"tercera"=>11);

    echo "TABLA DEL 5, 13 Y 11 <br>";
    // Aqui relaciona el array de $tablas con $numerodelatabla,
    //esto significa que $numerodelatabla sustituye a $tablas
    foreach($tablas as $numerodelatabla){
    //hacemos salto de linea
    echo "<br>";
    // Decimos por que numero queremos multiplicaron con su incremento
    for($x = 1;$x <= 10; $x++){

      //r = resultado de la multiplicacion
      //x = al incremento del 1 al 10
      //numerodelatabla = el numero que quieres multiplicar ($tablas)

      $r = $x * $numerodelatabla;
      echo $numerodelatabla." X ".$x." = ".$r."<br>";
    }
}

 ?>
