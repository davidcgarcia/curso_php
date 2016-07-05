<?php 

require 'funciones.php';


$conexion = conexion('imagenes', 'root', 'L4r4v3l*.*2016');

if (!$conexion) {
  die();
}

$id = isset($_GET[id]) ? (int)$_GET['id'] : false;

if (!$id) {
  header('Location: index.php');
}

$sql = 'SELECT * FROM fotos WHERE id = :id';

$statement = $conexion->prepare($sql);
$statement->execute([':id' => $id]);
$foto = $statement->fetch();

if (!$foto) {
  header('Location: index.php');
}

require 'views/foto.view.php';

?>