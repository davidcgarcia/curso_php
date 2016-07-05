<?php

/**
* Comprobar si un archivo existe, si no lo creamos
*
*/

/*$fileExists = file_exists('documento.txt');

if ($fileExists) {
  echo 'El archivo si existe';
} else {
  echo 'El archivo no existe';
}*/

// leer información de un archivo
// echo file_get_contents('documento.txt');

// file_put_contents('documento.txt', "Hola Mundo \n", FILE_APPED);

// Convertir un archivo a un arreglo, cada línea del archivo es un elemento del arreglo

$file = file('documento.txt');

echo '<pre>';
  print_r($file);
echo '</pre>';

?>