<?php
  
// if (condicion) {
  // instrucciones...
// }

/** 
* Operadores de comparación 
*
* == Igualdad 
* < Menor que 
* > Mayor que 
* <= Menor o igual que 
* >= Mayor o igual que 
* != Diferente
* ! Negación
*
*/

/** 
* Operadore lógicos 
*
* &&, AND - Evalua que se cumplan las dos condiciones 
* ||, OR - Evalua que se cumpla al menos una de las condiciones
* XOR - Evalua que se cumpla una y solo una condición
*/

$edad = 17;

if ($edad >= 18) {
  echo '<h1>Bienvenido!</h1>';
}


if ($edad < 18) {
  echo '<h1>Eres menor de edad!</h1>';
}

?>