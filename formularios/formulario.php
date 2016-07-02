<?php

  $errores = '';

  if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    if (!empty($nombre)) {

     /* $nombre = trim($nombre);
      $nombre = htmlspecialchars($nombre);
      $nombre = stripslashes($nombre);*/

      $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

      echo 'tu nombre es ' . $nombre . ' <br>';
    } else {
      $errores .= 'Por favor agrega un nombre<br>';
    }

    if (!empty($correo)) {

      $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

      if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores .= 'Por favor ingresa un correo valido! <br>';
      }

      echo 'tu correo es ' . $correo . ' <br>';
    } else {
      $errores .= 'Por favor agrega un correo <br>'; 
    }

  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Comprobando si un formulario ha sido enviado</title>
  <style>
    
    .error {
      color: red;
    }
  </style>
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <input type="text" name="nombre" placeholder="nombre">
    <input type="text" name="correo" placeholder="correo">
    
    <?php if (!empty($errores)): ?>
      <div class="error"><?php echo $errores; ?></div>
    <?php endif; ?>
    <input type="submit" value="Enviar" name="submit">
  </form>
</body>
</html>