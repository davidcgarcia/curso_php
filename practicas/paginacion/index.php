<?php

  try {

    $conexion = new PDO('mysql:host=localhost;dbname=paginacion', 'root', 'L4r4v3l*.*2016');

  } catch (PDOException $e) {
    echo 'Error DB: ' . $e->getMessage();
    die();
  }


  $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
  $postPorPagina = 5;

  $inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

  $sql = 'SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT ' . $inicio . ',' . $postPorPagina;
  $articulos = $conexion->prepare($sql);
  $articulos->execute();
  $articulos = $articulos->fetchAll();

  if (!$articulos) {
    header('Location: index.php');
  }

  $totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
  $totalArticulos = $totalArticulos->fetch()['total'];

  $numeroPaginas = ceil($totalArticulos / $postPorPagina);

  echo $numeroPaginas;


  require 'index.view.php';
?>