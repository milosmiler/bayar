
    <div class="overlay"></div>
    <section class="contacto">
      <h2>Contáctanos</h2>
      <div class="container flex">
        <div class="item-col">
          <div class="owl-carousel theme-contacto">
            <div class="item"><img src="uploads/<?= $datos->imagen1 ?>"></div>
            <div class="item"><img src="uploads/<?= $datos->imagen2 ?>"></div>
            <div class="item"><img src="uploads/<?= $datos->imagen3 ?>"></div>
          </div>
          <figure>
            <div class="filter">
              <figure class="logo-maps"><img src="public/images/logo-ronder.png"></figure>
            </div>
            <?php
              $direccion = str_replace("#", "", $datos->direccion_parte1.", ".$datos->direccion_parte2);
            ?>
            <iframe src="https://maps.google.com.ar/maps?t=m&amp;q=<?= $direccion ?>&amp;output=embed" width="600" height="450" style="border:0" frameborder="0" allowfullscreen></iframe>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.181960407467!2d-99.16621004942935!3d19.404542486836018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff1445ebc0cf%3A0x2f2468341ffac258!2spiso+1%2C+Tehuantepec+170%2C+Roma+Sur%2C+06760+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1559971326759!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe> -->
          </figure>
        </div>
        <div class="item-col flex">
          <div class="item-contac">
            <h2>Contáctanos</h2>
            <a href="https://www.google.com/maps/place/Terminal+1/@19.4045352,-99.1662097,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1ff144585e9bf:0xdac3f9534147c213!8m2!3d19.4045352!4d-99.164021?hl=es">
              <p><?= $datos->direccion_parte1 ?> <br> <?= $datos->direccion_parte2 ?></p>
            </a>
            <a class="phone" href="tel:+<?= $datos->telefono_contacto ?>"><?= $datos->telefono_contacto ?></a>
            <a class="mail" href="mailto:<?= $datos->email_contacto ?>?Subject=Hello%20again"><?= $datos->email_contacto ?></a>
            <aside class="social flex">
              <a href="https://www.facebook.com/Backyard-Group-1418532811598080">
                <i class="fab fa-facebook-f"></i>
               </a>
              <a href="">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.linkedin.com/company/backyardgroup/">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container"><a href="<?= base_url('aviso-de-privacidad') ?>">POLÍTICA DE PRIVACIDAD 2019</a></div>
    </footer>
    <input type="hidden" value="<?= base_url('contacto') ?>" id="location">
    <script src="public/js/jquery-1.11.3.min.js"></script>
    <script src="public/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="public/js/main.js" type="text/javascript"></script>
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