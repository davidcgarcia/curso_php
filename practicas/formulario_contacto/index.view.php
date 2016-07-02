<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario Contacto</title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  
  <div class="wrap">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" value="">

      <input type="text" name="correo" id="correo" class="form-control" placeholder="Correo" value="">

      <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje"></textarea>
      
      <!-- <div class="alert error">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
      </div>

      <div class="alert success">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
      </div> -->

      <input type="submit" class="btn btn-primary" value="Enviar Correo">
    </form>
  </div>

</body>
</html>