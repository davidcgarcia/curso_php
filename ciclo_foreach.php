<?php

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

$cristhian = [
  'telefono'  => 5124879, 
  'edad'      => 22, 
  'pais'      => 'Colombia'
];  

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ciclo Foreach</title>
</head>
<body>

  <ul>

    <?php 
      /*foreach ($meses as $mes) {
        echo '<li>' . $mes . '</li>';
      }*/

      foreach ($cristhian as $dato => $valor) {
        echo '<li>' . $dato . ': ' .$valor . '</li>';
      }
    ?>
  </ul>
</body>
</html>