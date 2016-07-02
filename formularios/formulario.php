<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Comprobando si un formulario ha sido enviado</title>
</head>
<body>
  <form action="valida_envio.php" method="post">
    <input type="text" name="nombre" placeholder="nombre">
    <input type="email" name="correo" placeholder="correo">

    <input type="submit" value="Enviar" name="submit">
  </form>
</body>
</html>