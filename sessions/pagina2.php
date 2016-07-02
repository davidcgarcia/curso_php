<?php 
session_start();

if ($_SESSION) {
  $nombre = $_SESSION['nombre'];

  echo '

    <!DOCTYPE html>
    <html lang="es">
    <head>
      <meta charset="UTF-8">
      <title>Página 2</title>
    </head>
    <body>
      <h1>Hola, '. $nombre .'</h1>
      <a href="cerrar.php">Cerrar Session</a>
    </body>
    </html>  
  ';
} else {
  echo 'No has iniciado sesion!';
}

?>