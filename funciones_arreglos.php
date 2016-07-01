<?php

/*$amigo = [
  'telefono'  => 5412454, 
  'edad'      => 20, 
  'pais'      => 'Colombia'

];*/

// Extraer los elementos de un arreglo asociativo en variables
// extract($amigo);

// echo $telefono;

$semana = [
  'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'
];

// Permite extraer el último elemento al final de un arreglo
// $ultimoDia = array_pop($semana);
// echo $ultimoDia;
/*foreach ($semana as $dia) {
  echo $dia . '<br>';
}
*/

// Une los elementos de un array en un string
// echo join('<br>', $semana);

// Devuelve los valores del arreglo de manera invertida

$semanaReverse = array_reverse($semana);
echo join(', ', $semanaReverse);
?>