<?php require 'header.php'; ?>

  <div class="contenedor">

    <?php foreach ($posts as $post): ?>
      <div class="post">
        <h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo']; ?></a></h2>
        <p class="fecha"><?php echo $post['fecha']; ?></p>
        <div class="thumb">
          <a href="">
            <img src="<?php echo RUTA; ?>imagenes/<?php echo $post['thumb']; ?>" alt="">
          </a>
        </div>
        <p class="extracto"><?php echo $foto['extracto']; ?></p>
        <a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Continuar leyendo</a>
      </div>
    <?php endforeach ?>

    <?php require 'paginacion.php'; ?>
  </div>

  <?php require 'footer.php';