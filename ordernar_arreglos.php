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

// sort($meses);
rsort($meses);

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Meses del año</title>
</head>
<body>
  <h1>Meses del año</h1>

  <ul>
    <?php 
      foreach ($meses as $mes) {
        echo '<li>' . $mes . '</li>';
      }
    ?>
  </ul>
</body>
</html>