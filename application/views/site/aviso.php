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
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
        </aside>
      </div>
    </footer>
    <input type="hidden" value="<?= base_url('aviso-de-privacidad') ?>" id="location">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="public/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="public/js/main.js" type="text/javascript"></script>
  </body>
</html>