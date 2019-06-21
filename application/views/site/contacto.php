
    <div class="overlay"></div>
    <section class="contacto">
      <div class="container flex">
        <div class="item-col">
          <div class="owl-carousel theme-contacto">
            <div class="item"><img src="uploads/<?= $datos->imagen1 ?>"></div>
            <div class="item"><img src="uploads/<?= $datos->imagen2 ?>"></div>
            <div class="item"><img src="uploads/<?= $datos->imagen3 ?>"></div>
          </div><img class="absolute" src="public/images/logo-contact.png">
          <figure>
            <div class="filter">
              <figure class="logo-maps"><img src="public/images/logo-ronder.png"></figure>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.181960407467!2d-99.16621004942935!3d19.404542486836018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff1445ebc0cf%3A0x2f2468341ffac258!2spiso+1%2C+Tehuantepec+170%2C+Roma+Sur%2C+06760+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1559971326759!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
          </figure>
        </div>
        <div class="item-col flex">
          <div class="item-contac">
            <h2>Contáctanos</h2>
            <p><?= $datos->direccion_parte1 ?> <br> <?= $datos->direccion_parte2 ?></p><a class="phone" href="tel:+<?= $datos->telefono_contacto ?>"><?= $datos->telefono_contacto ?></a><a class="mail" href="mailto:<?= $datos->email_contacto ?>?Subject=Hello%20again"><?= $datos->email_contacto ?></a>
            <aside class="social flex"><i class="fab fa-facebook-f"></i><i class="fab fa-twitter"></i><i class="fab fa-instagram"></i></aside>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container"><a href="<?= base_url('aviso-de-privacidad') ?>">POLÍTICA DE PRIVACIDAD 2019</a></div>
    </footer>
    <input type="hidden" value="<?= base_url('contacto') ?>" id="location">
    <script src="public/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/jquery.localscroll@2.0.0/jquery.localScroll.min.js"></script>
    <script src="public/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="public/js/main.js" type="text/javascript"></script>
  </body>
</html>