<?php

try {
  $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', 'L4r4v3l*.*2016');
  
  $sql = "select * from usuarios";

  $resultados = $conexion->query($sql);

  foreach ($resultados as $fila) {
    echo $fila['nombre'] . '<br>';
  }

} catch (PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}


?>