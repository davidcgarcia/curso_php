<?php 

function conexion($database)
{
  try {
    $conexion = new PDO('mysql:host=localhost;dbname='.$database['dbname'],$database['user'],$database['password']);

    return $conexion;

  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function limpiarDatos($datos)
{
  $datos = trim($datos);
  $datos = strip_slashes($datos);
  $datos = htmlspecialchars($datos);

  return $datos;
}

function paginaActual()
{
  return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtenerPost($postPorPagina, $conexion)
{
  $inicio = (paginaActual() > 1) ? (paginaActual() * $postPorPagina) - $postPorPagina : 0;

  $sql = 'SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT '.$inicio.','. $postPorPagina;

  $statement = $conexion->prepare($sql);
  $statement->execute();
  return $statement->fetchAll();
}


?>