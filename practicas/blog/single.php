<?php

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($database);
$idArticulo = idArticulo($_GET['id']);
if (!$conexion) {
  header('Location: error.php');
}

if (empty($idArticulo)) {
  header('Location: index.php');
}

$post = obtenerPostPorId($conexion, $idArticulo);

if (!$post) {
  header('Location: index.php');
}

$post = $post[0];

require 'views/single.view.php';

?>
