<?php 

function conexion($database)
{
  try {
    $conexion = new PDO('host:localhost;dbname=curso_blog', 'root', 'L4r4v3l*.*2016');

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

?>