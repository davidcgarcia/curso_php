<?php

$meses = [
    'Enero', 
    'Febrero', 
    'Marzo', 
    'Abril', 
    'Mayo', 
    'Junio', 
    'Julio', 
    'Agosto', 
    'Septiembre', 
    'Octubre', 
    'Noviembre', 
    'Diciembre'
  ];

/*for ($i = 0; $i < count($meses); ++$i) {
  echo $meses[$i] . '<br>';
}
*/

$i = 0;

while ($i < count($meses)) {
 echo $meses[$i] . '<br>';
 ++$i; 
}
?>