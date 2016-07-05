<?php

function contar_usuarios()
{
  $file = 'contador.txt';

  if (file_exists($file)) {
    $cuenta = file_get_contents($file) + 1;
    file_put_contents($file, $cuenta, FILE_APPEND);
    return $cuenta;
  } else {
    file_put_contents($file, 1);
    return 1;
  }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contador de visitas</title>
  <link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <h1>Contador de Visitas</h1>
  <div class="visitantes">
    <p class="numero"><?php echo contar_usuarios(); ?></p>
    <p class="texto">Visitas</p>
  </div>
</body>
</html>