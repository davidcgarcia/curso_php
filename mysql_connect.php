<?php


$conexion = mysql_connect('localhost', 'root', 'L4r4v3l*.*2016') or die('No se pudo conectar a la base de datos');

mysql_select_db('prueba_consola', $conexion);

$resultados = mysql_query('SELECT * FROM usuarios');

// $rows = mysql_fetch_object($resultados);

while ($rows = mysql_fetch_object($resultados)) {
  echo $rows->nombre . '<br>';
}

?>dsd