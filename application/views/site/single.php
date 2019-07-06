<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title> <?= $titulo ?> </title>
    <link href="<?= base_url() ?>public/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>public/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>public/images/favicon.ico">
    <meta name="description" content="descripcion del sitio web">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta property="og:title" content=" ">
    <meta property="og:site_name" content=" ">
    <meta property="og:url" content=" ">
    <meta property="og:description" content=" ">
    <meta property="og:image" content=" ">
  </head>
  <body>
    <div class="bg-dinamic" style="background: url(<?= $url. $data->imagen2 ?>);background-repeat: no-repeat;background-position: center center; background-size: cover">
      <header>
        <div class="container flex">
          <nav class="menu" id="navs">
            <a class="close">
              <i class="fa fa-times" style="color:white;"></i>
            </a>
            <a class="item-nav" href="<?= base_url() ?>">Proyectos</a>
            <a class="item-nav" href="<?= base_url('nosotros') ?>">Nosotros</a>
            <a class="item-nav" href="<?= base_url('contacto') ?>">Contacto</a>
          </nav>
          <span class="burger"><i class="fa fa-bars"></i></span>
          <figure class="logo"><img src="<?= base_url() ?>public/images/logo_blanco.png"></figure>
        </div>
      </header>
      <div class="overlay"></div>
    </div>
    <section class="single">
      <div class="container shadow">
        <div class="bread-crumbs"><a href="#">PROYECTOS / </a><a class="active" href="#"><?= $cat ?></a></div>
        <div class="mouse-container">
          <div class="mouse"><span class="scroll-down"></span></div>
          <p>scroll down</p>
        </div>
        <div class="item-extracto">
          <p> <?= $data->descripcion2 ?> </p>
        </div>
        <section class="slider-single">
          <div class="owl-carousel owl-single">
            <div class="item"><img src="<?= $url. $data->imagen3 ?>"></div>
            <div class="item"><img src="<?= $url. $data->imagen3 ?>"></div>
          </div>
        </section>
        <section class="content-single">
          <div class="item-extracto2">
            <?php
              $str = str_replace("\*", "<strong>", $data->descripcion3);
              $str = str_replace("*/", "</strong>", $str);
            ?>
            <p><?= $str ?></p>
            
          </div>
        </section>
        
<?php if ($data->video != null) { ?>
        <section class="video">
          <div class="container">
            <video controls poster="<?= $url. $data->imagen4 ?>">
              <source src="<?= $data->video ?>" type="video/mp4">Your browser does not support HTML5 video.
            </video>
          </div>
        </section>
<?php } ?>

      </div>
    </section>
    <section class="title content active">
      <h2> <?= $datosp->item1_titulo ?> </h2>
      <p> <strong><?= $datosp->item1_text_bold ?> <br></strong> <?= $datosp->item1_text ?> </p>
    </section>

    <section class="title content">
      <h2> <?= $datosp->item2_titulo ?> </h2>
      <p> <strong><?= $datosp->item2_text_bold ?> <br></strong> <?= $datosp->item2_text ?> </p>
    </section>

    <section class="title content">
      <h2> <?= $datosp->item3_titulo ?> </h2>
      <p> <strong><?= $datosp->item3_text_bold ?> <br></strong> <?= $datosp->item3_text ?> </p>
    </section>

    <section class="title content">
      <h2> <?= $datosp->item4_titulo ?> </h2>
      <p> <strong><?= $datosp->item4_text_bold ?> <br></strong> <?= $datosp->item4_text ?> </p>
    </section>

    <section class="title content">
      <h2> <?= $datosp->item5_titulo ?> </h2>
      <p> <strong><?= $datosp->item5_text_bold ?> <br></strong> <?= $datosp->item5_text ?> </p>
    </section>
    <section class="pulse">
      <div class="container flex">
        <div class="circle animate wave-circle">
          <div class="w1"></div>
          <div class="w2"></div>
          <div class="w3"></div>
          <div class="w4"></div>
        </div>
        <div class="circle animate wave-circle">
          <div class="w1"></div>
          <div class="w2"></div>
          <div class="w3"></div>
          <div class="w4"></div>
        </div>
        <div class="circle animate wave-circle">
          <div class="w1"></div>
          <div class="w2"></div>
          <div class="w3"></div>
          <div class="w4"></div>
        </div>
        <div class="circle animate wave-circle">
          <div class="w1"></div>
          <div class="w2"></div>
          <div class="w3"></div>
          <div class="w4"></div>
        </div>
        <div class="circle animate wave-circle">
          <div class="w1"></div>
          <div class="w2"></div>
          <div class="w3"></div>
          <div class="w4"></div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container"><a href="aviso-de-privacidad.html">POLÍTICA DE PRIVACIDAD 2019</a></div>
    </footer>
    <input type="hidden" value="single.html" id="location">
    <script src="<?= base_url() ?>public/js/jquery-1.11.3.min.js"></script>
    <script src="<?= base_url() ?>public/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>public/js/main.js" type="text/javascript"></script>
  </body>
</html>