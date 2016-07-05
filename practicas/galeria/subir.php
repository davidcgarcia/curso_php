<?php

require 'funciones.php';

$conexion = conexion('imagenes', 'root', 'L4r4v3l*.*2016');

if (!$conexion) {
  //header('Location: error.php');
  die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {

  $check = @getimagesize($_FILES['foto']['tmp_name']);


  if ($check !== false) {
    $carpetaDestino = 'fotos/';
    $archivoSubido = $carpetaDestino . $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], $archivoSubido);

    $statement = $conexion->prepare('INSERT INTO fotos(titulo, imagen, descripcion) VALUES (:titulo, :imagen, :descripcion)');

    $statement->execute([
      ':titulo'       => $_POST['titulo'], 
      ':imagen'       => $_FILES['foto']['name'], 
      ':descripcion'  => $_POST['texto']
    ]);

    header('Location: index.php');
  } else {
    $error = 'El archivo no es una imagen o el archivo es demasiado pesado!';
  }

}

require 'views/subir.view.php';
?>