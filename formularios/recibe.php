<?php

//print_r($_POST);


/*if(!$_POST){
  header('Location: http://localhost/curso_php/formularios/');
}

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$year = $_POST['year'];
$termino = $_POST['termino'];

echo 'Hola '. $nombre . ' eres ' . $sexo;
*/

if (!$_GET) {
  header('Location: http://localhost/curso_php/formularios/');
}

$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$termino = $_GET['termino'];


echo $nombre . '<br>';
?>