<?php

  $edad = 18;
  $edad = (isset($edad)) ? $edad: 'El usuario no estableció su edad';

  echo 'Edad: ' .$edad;

?>