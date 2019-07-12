    <div class="overlay"></div>
    <section class="category animated fadeIn delay-2s">
      <div class="container">
        <h2 <?= $estilo ?>>  <?= $texto_principal ?> </h2>
        <ul class="flex" id="category">
          <li><a class="cat <?= ($selectmenu == 'eventos') ? 'active': '' ?>" href="<?= base_url("?cat=eventos") ?>">Eventos</a></li>
          <!-- <li><a class="cat <?= ($selectmenu == 'construcciones') ? 'active': '' ?>" href="<?= base_url("?cat=construcciones") ?>">Construcciones</a></li> -->
          <li><a class="cat" href="<?= base_url("single/$construcciondata->slug/construccion") ?>">Construcciones</a></li>
          <li><a class="cat <?= ($selectmenu == 'tacticas') ? 'active': '' ?>" href="<?= base_url("?cat=tacticas") ?>">Campañas tácticas</a></li>
          <li><a class="cat <?= ($selectmenu == 'activaciones') ? 'active': '' ?>" href="<?= base_url("?cat=activaciones") ?>">Activaciones</a></li>
          <li><a class="cat <?= ($selectmenu == 'tecnologia') ? 'active': '' ?>" href="<?= base_url("?cat=tecnologia") ?>">Tecnología</a></li>
          <li><a class="cat <?= ($selectmenu == 'contenidos') ? 'active': '' ?>" href="<?= base_url("?cat=contenidos") ?>">Contenidos</a></li>
        </ul>
      </div>
       <section class="select">
 
        <p>Filtrar por:</p>
        <a class="toggle" href="#example">
          <?php 
            if ($selectmenu == 'eventos') {
              echo "Eventos";
            }
            else if ($selectmenu == 'construcciones') {
              echo "Construcciones";
            }
            else if ($selectmenu == 'tacticas') {
              echo "Tacticas";
            }
            else if ($selectmenu == 'activaciones') {
              echo "Activaciones";
            }
            else if ($selectmenu == 'tecnologia') {
              echo "Tecnologia";
            }
            else if ($selectmenu == 'contenidos') {
              echo "Contenidos";
            }
          ?>
          <i class="fa fa-angle-down"></i>
        </a>
        <div class="toggle-content show-slow" id="example">
          <ul class="expand-cat">
            <li><a href="<?= base_url("?cat=eventos") ?>" data-categoria="eventos">Eventos</a></li>
            <!-- <li><a href="<?= base_url("?cat=construcciones") ?>" data-categoria="Construcciones">Construcciones</a></li> -->
            <li><a href="<?= base_url("single/$construcciondata->slug/construccion") ?>" data-categoria="Construcciones">Construcciones</a></li>
            <li><a href="<?= base_url("?cat=tacticas") ?>" data-categoria="Campañas tácticas">Campañas tácticas</a></li>
            <li><a href="<?= base_url("?cat=activaciones") ?>" data-categoria="Activaciones">Activaciones</a></li>
            <li><a href="<?= base_url("?cat=tecnologia") ?>" data-categoria="Tecnología">Tecnología</a></li>
            <li><a href="<?= base_url("?cat=contenidos") ?>" data-categoria="Contenidos">Contenidos</a></li>
          </ul>
        </div>
      </section>
    </section>
    <div class="container">
      <div class="mouse-container animated fadeIn delay-3s">
        <div class="mouse"><span class="scroll-down"></span></div>
        <p>scroll down</p>
      </div>
    </div>

    <section class="grid">
      <div class="container flex active-grid content-tab">
        <ul class="list-grid animate-grids2">
          <?php $cont = 1; ?>
          <?php foreach ($eventos->result() as $evento) { ?>

              <?php if (($cont % 2) == 1 ){ ?>

                    <li>
                        <div class="caption-item">
                          <p><?= $evento->descripcion ?></p>
                          <a href="<?= base_url("single/$evento->slug/$d") ?>">
                            <div class="leyend">
                              <i class="fas fa-angle-right"></i> <p>Continuar <strong>leyendo</strong></p>
                            </div>
                          </a>
                        </div>
                        <div class="item-title"><?= $evento->titulo ?> <br><strong>/ <?= $evento->titulop2 ?></strong></div><img src="uploads/post/<?= $selectmenu.'/'.$evento->imagen1 ?>">
                    </li>

              <?php } ?>
              <?php $cont++; ?>
          <?php } ?>

        </ul>

        <ul class="list-grid animate-grids">

          <?php $cont1 = 1 ?>
          <?php foreach ($eventos->result() as $evento) { ?>
                <?php if (($cont1 % 2) == 0 ){ ?>
                    
                    <li>
                        <div class="caption-item">
                          <p><?= $evento->descripcion ?></p>
                          <a href="<?= base_url("single/$evento->slug/$d") ?>">
                            <div class="leyend">
                              <i class="fas fa-angle-right"> </i><p>Continuar <strong>leyendo</strong></p>
                            </div>
                          </a>
                        </div>
                          <div class="item-title"><?= $evento->titulo ?> <br><strong>/ <?= $evento->titulop2 ?></strong></div><img src="uploads/post/<?= $selectmenu.'/'.$evento->imagen1 ?>">
                    </li>
                   
                <?php } ?>
                <?php $cont1++; ?>
          <?php } ?>

          <li class="credencial">
              <div class="item-title">SÍGUENOS <br><strong>/ @backyard</strong></div>
              <aside class="social flex">
                <a href="https://www.facebook.com/Backyard-Group-1418532811598080"><i class="fab fa-facebook-f"></i> </a>
                <a href="https://vimeo.com/user68720835"><i class="fab fa-vimeo-v"></i> </a>
                 <a href="https://www.linkedin.com/company/backyardgroup/">
                    <i class="fab fa-linkedin-in"></i>
                </a>
              </aside>
          </li>

        </ul>
      </div>
    </section>
    <section class="title content active">
      <div class="container">
        <h2> <?= $datos->item1_titulo ?> </h2>
      <p> <strong><?= $datos->item1_text_bold ?> <br></strong> <?= $datos->item1_text ?> </p>
      </div>
      
    </section>

    <section class="title content">
      <div class="container">
        <h2 style="color: #7A6B99;"> <?= $datos->item2_titulo ?> </h2>
      <p> <strong><?= $datos->item2_text_bold ?> <br></strong> <?= $datos->item2_text ?> </p>
      </div>
      
    </section>

    <section class="title content">
      <div class="container">
        <h2 style="color: #42B4C6;"> <?= $datos->item3_titulo ?> </h2>
      <p> <strong><?= $datos->item3_text_bold ?> <br></strong> <?= $datos->item3_text ?> </p>
      </div>
      
    </section>

    <section class="title content">
      <div class="container">
        <h2 style="color: #DC2871;"> <?= $datos->item4_titulo ?> </h2>
      <p> <strong><?= $datos->item4_text_bold ?> <br></strong> <?= $datos->item4_text ?> </p>
      </div>
      
    </section>

    <section class="title content">
      <div class="container">
         <h2 style="color: #A9C554;"> <?= $datos->item5_titulo ?> </h2>
      <p> <strong><?= $datos->item5_text_bold ?> <br></strong> <?= $datos->item5_text ?> </p>
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
      <div class="container">
          <aside class="social-footer">
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
          <a href="<?= base_url('aviso-de-privacidad') ?>">POLÍTICA DE PRIVACIDAD 2019</a>
      </div>
    </footer>
    <input type="hidden" id="location" value="<?= base_url() ?>">
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