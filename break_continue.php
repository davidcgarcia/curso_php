<?php


$paises = [
  'Mexico', 
  'España', 
  'Colombia', 
  'Peru', 
  'Argentina', 
  'Venezuela', 
  'Guatemala'
];

/*foreach ($paises as $pais) {
  echo $pais . '<br>';

  if ($pais == 'Colombia') {
    break;
  }
}*/

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Break && Continue</title>
</head>
<body>
  <h1>Países latinoamericanos</h1>

  <?php 
    foreach ($paises as $pais) {
      
      if ($pais == 'España') {
        continue;
      }
      echo $pais . '<br>';

    }
  ?>
</body>
</html>