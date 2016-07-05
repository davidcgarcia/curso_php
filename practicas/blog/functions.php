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
  $datos = stripslashes($datos);
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


function idArticulo($id)
{
  return (int)limpiarDatos($id);
}

function obtenerPostPorId($conexion, $idArticulo)
{
  $sql = 'SELECT * FROM articulos WHERE id = '.$idArticulo. ' LIMIT 1';
  
  $resultado = $conexion->query($sql);
  $resultado = $resultado->fetchAll();

  return ($resultado) ? $resultado : false;
}

function fecha($fecha)
{
  $timestamp = strtotime($fecha);
  $meses = [
    'Enero', 
    'Febrero', 
    'Marzo', 
    'Abril', 
    'Mayo', 
    'Junio', 
    'Julio', 
    'Agosto',
    'Septiembre', 
    'Octubre', 
    'Noviembre', 
    'Diciembre'
  ];

  $dia = date('d', $timestamp);
  $mes = date('m', $timestamp) - 1;
  $year = date('Y', $timestamp);

  $fecha = $dia . ' de ' .$meses['$mes']. ' del ' .$year; 
  return $fecha;
}

?>