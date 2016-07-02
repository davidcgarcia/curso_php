<?php

$amigos = array(
  array('Alejandro', 21, 
    array('asd', 
      array('otro arreglo'))
    ), 
  array('Cesar', 21), 
  array('Manuel', 10)
);

echo $amigos[0][0] . '<br>';
echo $amigos[1][0] . '<br>';
echo $amigos[2][0] . '<br>';

?>