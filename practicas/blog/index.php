<?php

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($database);

if (!$conexion) {
  header('Location: error.php');
}

$posts = obtenerPost($blogConfig['post_por_pagina'], $conexion);

if (!$posts) {
  header('Location: error.php');
}
require 'views/index.view.php';

?>