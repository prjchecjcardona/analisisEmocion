<?php
require 'conexion.php';
require 'arrayllamada.php';
require 'arrayfrase.php';

$os = array("Mac", "NT", "Irix hola", "Linux", "Irix");
    echo substr_count( implode($os),"Irix");


    var_dump(substr_count( implode($arrayfrase),"ENFADO"));
/*

$long= count ($arrayllamada);
for ($i=0; $i < $long; $i++) {
  $longfrase= count($arrayfrase);
  for ($j=0; $j < $longfrase; $j++) {
    $busqueda= array_search($arrayfrase[$j],$arrayllamada[$i],true);
  }

}*/
?>
