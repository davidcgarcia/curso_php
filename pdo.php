<?php

try {
  $conexion = new PDO('mysql:host = localhost; dbname = prueba_consola', 'root', 'L4r4v3l*.*2016');
  echo 'Conexion OK';
} catch (PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}


?>