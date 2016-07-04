<?php
  
  if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $errores = '';

    if (!empty($usuario) || !empty($password) || !empty($password2)) {
      
      try {
        $conexion = new PDO('mysql:host=localhost;dbname=curso_login', 'root', 'L4r4v3l*.*2016');
      } catch(PDOException $e) {
        echo 'Error DB: ' . $e->getMessage();
      }

      $sql = 'SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1';
      $statement = $conexion->prepare($sql);
      $statement->execute([':usuario' => $usuario]);
      $row = $statement->fetch();

      if ($row != false) {
        $errores .= '<li>El nombre de usuario ya existe!</li>';
      }

    } else {
      $errores .= '<li>Por favor rellena todos los datos correctamente!</li>';
    }
  }
  require 'views/registro.view.php';

?>