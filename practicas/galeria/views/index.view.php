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
      <h1 class="titulo">Mi Galería</h1>
    </div>
  </header>

  <section class="fotos">
    <div class="contenedor">
      <?php foreach ($fotos as $foto): ?>
        <div class="thumb">
          <a href="#">
            <img src="fotos/<?php echo $foto['imagen']; ?>" alt="titulo de la imagen">
          </a>
        </div>
      <?php endforeach ?>

      <div class="paginacion">
      <?php if ($paginaActual > 1): ?>
        <a href="index.php?p=<?php echo $paginaActual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior </a>
      <?php endif ?>

      <?php if ($totalPaginas != $paginaActual): ?>
        <a href="index.php?=<?php echo $paginaActual + 1; ?>" class="derecha"> Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
      <?php endif ?>
      </div>
    </div>
  </section>

  <footer>
    <p class="copyright">Galería creada por mí</p>
  </footer>
</body>
</html>