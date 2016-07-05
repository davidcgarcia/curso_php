<?php

require 'funciones.php';


$fotosPorPagina = 8;
$paginaActual = isset($_GET['p']) ? (int)$_GET['p'] : 1;
$inicio = ($paginaActual > 1) ? ($paginaActual * fotosPorPagina) - $fotosPorPagina : 1;

$conexion = conexion('imagenes', 'root', 'L4r4v3l*.*2016');

if (!$conexion) {
  die();
}

$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotosPorPagina";

$statement = $conexion->prepare($sql);
$statement->execute();
$fotos = $statement->fetchAll();

if (!$fotos) {
  header('Location: index.php');
}

$sql = 'SELECT FOUND_ROWS() as total_filas';
$statement = $conexion->prepare($sql);
$statement->execute();
$totalPost = $statement->fetch()['total_filas'];

$totalPaginas = ceil($totalPost / $fotosPorPagina);

require 'views/index.view.php';

?>