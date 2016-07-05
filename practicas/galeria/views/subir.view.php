<!DOCTYPE html>
<html lang="es">
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
      <h1 class="titulo">Foto: 1.jpg</h1>
    </div>
  </header>

  <div class="contenedor">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" method="POST" enctype="multipart/form-data">
      
      <label for="foto">Selecciona tu foto</label>
      <input type="file" name="foto" id="foto">

      <label for="titulo">Titulo de la foto</label>
      <input type="text" name="titulo" id="titulo">

      <label for="texto">Descripcion</label>
      <textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>
      
      <?php if (isset($error)): ?>
        <p class="error"><?php echo $error; ?></p>
      <?php endif ?>
      <input type="submit" value="Subir Foto" class="submit">
    </form>
  </div>

  <footer>
    <p class="copyright">Galería creada por mí</p>
  </footer>
</body>
</html>