<?php

/**
* Ejemplo de funciones: 
* 
* 1.- Calcular el área de un triangulo
*
*
*/

function calcularAreaTriangulo($base, $altura) {

  return ($base * $altura) / 2;
}

echo 'El triangulo tiene un área de: '. calcularAreaTriangulo(10, 10) . 'm2';

?>