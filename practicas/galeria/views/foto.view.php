<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <title>Galería</title>
</head>
<body>
  <header>
    <div class="contenedor">
      <h1 class="titulo"><?php if (!empty($foto['titulo'])) {
        echo $foto['titulo'];
      } else {
        echo $foto['imagen'];
      }?></h1>
    </div>
  </header>

  <div class="contenedor">
    <div class="foto">
      <img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
      <p><?php echo $foto['descripcion']; ?></p>
      <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
    </div>
  </div>

  <footer>
    <p class="copyright">Galería creada por mí</p>
  </footer>
</body>
</html>