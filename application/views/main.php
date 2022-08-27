<!-- Comienza a escribir tu código aquí -->
<?php $imgs = ["friends.webp"] ?>


<!-- Hero Banner -->
<div id="carouselExampleControls" class="seccion carousel carousel__hero slide " data-ride="carousel">
  <div class="carousel-inner">
    <?php foreach ($imgs as $index => $img) { ?>
      <div class="carousel-item <?= $index == 0 ? 'active' : ''; ?>">
        <img class="d-block w-100" src="<?= base_url(); ?>assets/css/images/<?= $img ?>" alt="Friends ">
        <div class="carousel-caption  d-md-block carousel__hero--description">
          <h5>Siéntete seguro en todo momento</h5>
          <p>Contrata tu seguro y comienza tu protección hoy mismo</p>
        </div>
      </div>
    <?php } ?>

  </div>
  <a class="carousel-control-prev " href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next " href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Fin de Hero Banner -->

<!-- 3 Columnas con texto -->
<div class="row seccion justify-content-around subtitle text-center">
  <div>
    <h3>Subtítulo 1</h3>
    <p>Lorem ipsum.</p>
  </div>
  <div>
    <h3>Subtítulo 2</h3>
    <p>Lorem ipsum.</p>
  </div>
  <div>
    <h3>Subtítulo 3</h3>
    <p>Lorem ipsum.</p>
  </div>
</div>
<!-- Fin de 3 Columnas con texto -->

<!-- Imagen de anchura total con texto encima -->
<div class="seccion subtitle__friends">
  <div class="d-flex align-items-center h-100">
    <div class="subtitle w-100 text-center text-white">
      <h3>Subtítulo 4</h3>
      <p>Lorem ipsum dolor amet</p>
    </div>
  </div>
</div>
<!-- Fin de Imagen de anchura total con texto encima -->

<!-- 2 Columnas con texto y círculo Golden -->
<div class="seccion row justify-content-around subtitle">
  <div class="row align-items-center">
    <span class="circle--golden">1</span>
    <div>
      <h3>Subtítulo 5</h3>
      <p>Lorem ipsum dolor amet</p>
    </div>
  </div>
  <div class="row align-items-center">
    <span class="circle--golden">2</span>
    <div>
      <h3>Subtítulo 6</h3>
      <p>Lorem ipsum dolor amet</p>
    </div>
  </div>
</div>
<!-- Fin de 2 Columnas con texto y círculo Golden -->

<div class="about__us">
  <div class="row justify-content-center gap-3 footer__info">
    <div>
      <h3>Sitio</h3>
      <nav class="row flex-column">
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Nosotros</a></li>
          <li><a href="#">Preguntas Frecuentes</a></li>
        </ul>
      </nav>
    </div>
    <div class="row flex-column">
      <h3>Contacto</h3>
      <div>
        <p>01 2345 5678</p>
        <p>mail@gmail.com</p>
      </div>
    </div>
  </div>
</div>
<!-- Termina tu código aquí -->
