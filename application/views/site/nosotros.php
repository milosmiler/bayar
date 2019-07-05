
    <div class="overlay"></div>
     
    <section class="nosotros">
      <div class="container">
        <p>Somos una agencia de comunicación integral con más de 13 años de experiencia siempre enfocada en crear. Creamos grandes ideas que se convierten en experiencias únicas.</p>
      </div>
      <div class="slider-nosotros">
        <div class="owl-carousel" id="sync1">
          <div class="item"><img src="uploads/<?= $datos->s1_imagen1 ?>"><!-- <img src="public/images/nosotros.png"> -->
            <div class="slide-progress"></div>
          </div>
          <div class="item"><img src="uploads/<?= $datos->s1_imagen2 ?>"><!-- <img src="public/images/nosotros2.png"> -->
            <div class="slide-progress"></div>
          </div>
          <div class="item"><img src="uploads/<?= $datos->s1_imagen3 ?>"><!-- <img src="public/images/nosotros3.png"> -->
            <div class="slide-progress"></div>
          </div>
          <div class="item"><img src="uploads/<?= $datos->s1_imagen4 ?>"><!-- <img src="public/images/nosotros4.png"> -->
            <div class="slide-progress"></div>
          </div>
          <div class="item"><img src="uploads/<?= $datos->s1_imagen5 ?>"><!-- <img src="public/images/nosotros5.png"> -->
            <div class="slide-progress"></div>
          </div>
        </div>
      </div>
                <div class="container">
              <div class="container-owl-nav">
        <div class="owl-carousel" id="sync2">
          <div class="item">
            <figure><img src="uploads/<?= $datos->url_img1 ?>"></figure>
            <div class="item-content">
              <h2><?= $datos->text_titulo1 ?></h2>
              <p><?= $datos->text_img1 ?></p>
            </div>
          </div>
          <div class="item">
            <figure><img src="uploads/<?= $datos->url_img2 ?>"></figure>
            <div class="item-content">
              <h2><?= $datos->text_titulo2 ?></h2>
              <p><?= $datos->text_img2 ?></p>
            </div>
          </div>
          <div class="item">
            <figure><img src="uploads/<?= $datos->url_img3 ?>"></figure>
            <div class="item-content">
              <h2><?= $datos->text_titulo3 ?></h2>
              <p><?= $datos->text_img3 ?></p>
            </div>
          </div>
          <div class="item">
            <figure><img src="uploads/<?= $datos->url_img4 ?>"></figure>
            <div class="item-content">
              <h2><?= $datos->text_titulo4 ?></h2>
              <p><?= $datos->text_img4 ?></p>
            </div>
          </div>
          <div class="item">
            <figure><img src="uploads/<?= $datos->url_img5 ?>"></figure>
            <div class="item-content">
              <h2><?= $datos->text_titulo5 ?></h2>
              <p><?= $datos->text_img5 ?></p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <section class="brand">
      <div class="container">
        <h2><?= $datos->titulo_p1 ?> <span><?= $datos->titulo_p2 ?></span></h2>
        <p> <strong><?= $datos->texto_bold1 ?> <br></strong><?= $datos->texto_normal2 ?></p><span><?= $datos->texto ?></span>
      </div>
    </section>
    <section class="video">
      <div class="container">
        <video controls poster="uploads/<?= $datos->img_video ?>">
          <source src="<?= $datos->video ?>" type="video/mp4">Your browser does not support HTML5 video.
        </video>
      </div>
    </section>
    <footer>
      <div class="container"><a href="<?= base_url('aviso-de-privacidad') ?>">POLÍTICA DE PRIVACIDAD 2019</a></div>
    </footer>
    <input type="hidden" value="<?= base_url('nosotros') ?>" id="location">
    <script src="public/js/jquery-1.11.3.min.js"></script>
    <script src="public/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="public/js/main.js" type="text/javascript"></script>
  </body>
</html>