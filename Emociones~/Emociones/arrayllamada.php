<?php
include"conexion.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="1">
      <?php
        $query= 'SELECT * FROM tbl_llamada';
        $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
        $i=0;
        while ( $rowllamada=pg_fetch_array($result)) {
          $arrayllamada[$i]=$rowllamada;
          $i++;
        }
         ?>
      </table>
  </body>
</html>
