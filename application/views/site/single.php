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
        <div class="container flex" style="background: transparent">
          <nav class="menu" id="navs">
            <a class="close">
              <i class="fa fa-times"></i>
            </a>
            <a class="item-nav" href="<?= base_url() ?>">Proyectos</a>
            <a class="item-nav" href="<?= base_url('nosotros') ?>">Nosotros</a>
            <a class="item-nav" href="<?= base_url('contacto') ?>">Contacto</a>
            <aside class="social-mobile">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
          </aside>
          </nav>
          <span class="burger">
            <i class="fa fa-bars" style="color:white;"></i>
          </span>
          <figure class="logo"><img src="<?= base_url() ?>public/images/logo_blanco.png"></figure>
        </div>
      </header>
      <div class="overlay"></div>
    </div>
    <section class="single">
      <div class="container shadow">
        <div class="bread-crumbs">
          <a href="<?= base_url() ?>">PROYECTOS / </a><a class="active" href="#"><?= $cat ?></a></div>
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
            <?php if ($data->imagend1 != 'null' && $data->imagend1 != null){ ?>
              <div class="item"><img src="<?= $url. $data->imagend1 ?>"></div>
            <?php } ?>
            <?php if ($data->imagend2 != 'null' && $data->imagend2 != null){ ?>
              <div class="item"><img src="<?= $url. $data->imagend2 ?>"></div>
            <?php } ?>
            <?php if ($data->imagend3 != 'null' && $data->imagend3 != null){ ?>
              <div class="item"><img src="<?= $url. $data->imagend3 ?>"></div>
            <?php } ?>
            <?php if ($data->imagend4 != 'null' && $data->imagend4 != null){ ?>
              <div class="item"><img src="<?= $url. $data->imagend4 ?>"></div>
            <?php } ?>
            <?php if ($data->imagend5 != 'null' && $data->imagend5 != null){ ?>
              <div class="item"><img src="<?= $url. $data->imagend5 ?>"></div>
            <?php } ?>
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
           <!--  <video controls poster="<?= $url. $data->imagen4 ?>">
              <source src="<?= $data->video ?>" type="video/mp4">Your browser does not support HTML5 video.
            </video> -->
            <iframe src="https://player.vimeo.com/video/<?= $datos->video ?>" width="1200" height="460" frameborder="0" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
          </div>
        </section>
<?php } ?>

      </div>
    </section>
    <section class="title content active">
      <div class="container">
        <h2> <?= $datosp->item1_titulo ?> </h2>
        <p> <strong><?= $datosp->item1_text_bold ?> <br></strong> <?= $datosp->item1_text ?> </p>
      </div>
    </section>

    <section class="title content">
      <div class="container">
        <h2 style="color: #7A6B99;"> <?= $datosp->item2_titulo ?> </h2>
        <p> <strong><?= $datosp->item2_text_bold ?> <br></strong> <?= $datosp->item2_text ?> </p>
      </div>
    </section>

    <section class="title content">
      <div class="container">
        <h2 style="color: #42B4C6;"> <?= $datosp->item3_titulo ?> </h2>
        <p> <strong><?= $datosp->item3_text_bold ?> <br></strong> <?= $datosp->item3_text ?> </p>
      </div>
    </section>

    <section class="title content">
      <div class="container">
        <h2 style="color: #DC2871;"> <?= $datosp->item4_titulo ?> </h2>
        <p> <strong><?= $datosp->item4_text_bold ?> <br></strong> <?= $datosp->item4_text ?> </p>
      </div>
    </section>

    <section class="title content">
      <div class="container">
        <h2 style="color: #A9C554;"> <?= $datosp->item5_titulo ?> </h2>
        <p> <strong><?= $datosp->item5_text_bold ?> <br></strong> <?= $datosp->item5_text ?> </p>
      </div>
    </section>
    <section class="pulse">
      <div class="container flex">
        <div class="circle">
          <div class="indicator nt0 active"></div>
          <div class="indicator nt0 delay1"></div>
          <div class="indicator nt0 delay2"></div>
        </div>
        <div class="circle">
          <div class="indicator nt1"></div>
          <div class="indicator nt1 delay1"></div>
          <div class="indicator nt1 delay2"></div>
        </div>
        <div class="circle">
          <div class="indicator nt2"></div>
          <div class="indicator nt2 delay1"></div>
          <div class="indicator nt2 delay2"></div>
        </div>
        <div class="circle">
          <div class="indicator nt3"></div>
          <div class="indicator nt3 delay1"></div>
          <div class="indicator nt3 delay2"></div>
        </div>
        <div class="circle">
          <div class="indicator nt4"></div>
          <div class="indicator nt4 delay1"></div>
          <div class="indicator nt4 delay2"></div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container"><a href="<?= base_url('aviso-de-privacidad') ?>">POLÍTICA DE PRIVACIDAD 2019</a></div>
    </footer>
    <input type="hidden" value="single.html" id="location">
    <script src="<?= base_url() ?>public/js/jquery-1.11.3.min.js"></script>
    <script src="<?= base_url() ?>public/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>public/js/main.js" type="text/javascript"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-52729700-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-52729700-2');
</script>
  </body>
</html>