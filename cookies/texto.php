<?php

  if (isset($_COOKIE['font-size'])) {

    $size = htmlspecialchars($_COOKIE['font-size']);

  } else {

    $size = '15px';

  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    p {
      font-size: <?php echo $size; ?>;
    }

  </style>
</head>
<body>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deserunt alias commodi praesentium eaque iste, eos dolorum numquam maiores consequuntur voluptatum animi aut voluptatibus eligendi, veniam, laboriosam debitis quas ea.
  </p>
</body>
</html>