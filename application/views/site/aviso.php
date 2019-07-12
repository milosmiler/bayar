    <div class="overlay"></div>
    <section class="privacidad">
      <div class="container">
        <!-- <?= $datos->texto ?> -->
        <h2>Aviso de privacidad</h2>
        <p> <?= $datos->texto ?> </p>
      </div>
    </section>
    <footer class="aviso">
      <div class="container-footer">
        <p>SÍGUENOS <br><span>/ @backyard</span></p>
        <aside class="social">
          <a href="https://www.facebook.com/Backyard-Group-1418532811598080">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://vimeo.com/user68720835">
            <i class="fab fa-vimeo-v"></i>
          </a>
          <a href="https://www.linkedin.com/company/backyardgroup/">
           <i class="fab fa-linkedin-in"></i>
          </a>
        </aside>
      </div>
    </footer>
    <input type="hidden" value="<?= base_url('aviso-de-privacidad') ?>" id="location">
    <script src="js/jquery-1.11.3.min.js"></script>
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