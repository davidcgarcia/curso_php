<?php

$id = $_GET['id'];

try {
  $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', 'L4r4v3l*.*2016');
  
  /** 
  * Ejecuantando consultas mediante el método Query
  $sql = "select * from usuarios";

  $resultados = $conexion->query($sql);

  foreach ($resultados as $fila) {
    echo $fila['nombre'] . '<br>';
  }*/

  // Consultas Preparadas - Prepared Statements

  // $statement = $conexion->prepare('SELECT * FROM usuarios WHERE id = :id');
  $statement = $conexion->prepare('INSERT INTO usuarios(id, nombre, email) VALUES(null, "Natalia Mutiz", "nmutiz@gmail.com")');

  // $statement->execute([':id' => $id]);
  $statement->execute();

 /* $rows = $statement->fetchAll();
  
  foreach ($rows as $row) {
    echo $row['nombre'] . '<br>';
  }*/

} catch (PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}


?>