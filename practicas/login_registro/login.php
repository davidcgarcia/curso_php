<?php session_start();

if (isset($_SESSION['usuario'])) {
  header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
  $password = $_POST['password'];
  $password = hash('sha512', $password);

  try {
    $conexion = new PDO('mysql:host=localhost;dbname=curso_login', 'root', 'L4r4v3l*.*2016');
  } catch (PDOException $e) {
    echo 'Error DB: ' . $e->getMessage();
  }

  $statement = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password");
  $statement->execute([
    ':usuario'  => $usuario, 
    ':password' => $password 
  ]);

  $resultado = $statement->fetch();

  if ($resultado !== false) {
    $_SESSION['usuario'] = $usuario;
    header('Location: index.php');
  } else {
    $errores .= '<li>Opsss! Parece que algunos datos son incorrectos!</li>';
  }


}

require 'views/login.view.php';

?>