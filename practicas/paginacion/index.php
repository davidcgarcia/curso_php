<?php

  try {

    $conexion = new PDO('mysql:host=localhost;dbname=paginacion', 'root', 'L4r4v3l*.*2016');

  } catch (PDOException $e) {
    echo 'Error DB: ' . $e->getMessage();
    die();
  }


  $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
  $postPorPagina = 5;

    
  require 'index.view.php';
?>