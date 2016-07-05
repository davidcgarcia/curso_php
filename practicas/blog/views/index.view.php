<?php require 'header.php'; ?>

  <div class="contenedor">
    <div class="post">
      <h2 class="titulo"><a href="single.php">Titulo del articulo</a></h2>
      <p class="fecha">1 de Enero 2016</p>
      <div class="thumb">
        <a href="#">
          <img src="<?php echo RUTA; ?>imagenes/1.png" alt="">
        </a>
      </div>
      <p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, modi.</p>
      <a href="#" class="continuar">Continuar leyendo</a>
    </div>

    <div class="post">
      <h2 class="titulo"><a href="#">Titulo del articulo</a></h2>
      <p class="fecha">1 de Enero 2016</p>
      <div class="thumb">
        <a href="#">
          <img src="<?php echo RUTA; ?>imagenes/2.png" alt="">
        </a>
      </div>
      <p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, modi.</p>
      <a href="#" class="continuar">Continuar leyendo</a>
    </div>

    <?php require 'paginacion.php'; ?>
  </div>

  <?php require 'footer.php';