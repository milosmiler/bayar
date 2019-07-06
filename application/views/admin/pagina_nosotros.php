
        <!-- Contenido -->

         <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a href="<?= base_url('admin/logout') ?>">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>
                </nav>
            </div> <!-- /row -->

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Nosotros</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Nosotros</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Pagina</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-content">
                                <div class="row">
                                    <span style='color:red;display:block;margin-left:5%;font-weight:bolder;font-size:14px'> <?= @$error_update ?> </span>
                                    <span style='color:green;display:block;margin-left:5%;font-weight:bolder;font-size:14px'> <?= @$success ?> </span>
                                </div>
                                <?php echo form_open(base_url("admin/nosotros/pagina"), ["role"=>"form", "enctype"=>"multipart/form-data","method"=>"POST"]) ?>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Texto Principal: </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="text-principal"><?= $datos->texto_principal ?></textarea>
                                            <!-- <input type="text" class="form-control" name="text-principal" value="<?= $datos->texto_principal ?>"> -->
                                            <?php echo form_error('text-principal', "<span style='color:red;display:block'>", "</span>") ?>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Slider 1: </label>
                                        <div class="col-sm-10">
                                            <span class="form-text m-b-none">Imagen 1</span>
                                            <div class="custom-file">
                                                <input id="slogo1" type="file" name="s1_imagen1">                                                
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->s1_imagen1 ?></span>
                                                <?php echo form_error('s1_imagen1', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <br>
                                            <span class="form-text m-b-none">Imagen 2</span>
                                            <div class="custom-file">
                                                <input id="slogo2" type="file" name="s1_imagen2">                                                
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->s1_imagen2 ?></span>
                                                <?php echo form_error('s1_imagen2', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <span class="form-text m-b-none">Imagen 3</span>
                                            <div class="custom-file">
                                                <input id="slogo3" type="file" name="s1_imagen3">                                                
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->s1_imagen3 ?></span>
                                                <?php echo form_error('s1_imagen3', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <span class="form-text m-b-none">Imagen 4</span>
                                            <div class="custom-file">
                                                <input id="slogo4" type="file" name="s1_imagen4">                                                
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->s1_imagen4 ?></span>
                                                <?php echo form_error('s1_imagen4', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <span class="form-text m-b-none">Imagen 5</span>
                                            <div class="custom-file">
                                                <input id="slogo5" type="file" name="s1_imagen5">                                                
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->s1_imagen5 ?></span>
                                                <?php echo form_error('imagen1', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Slider 2: </label>
                                        <div class="col-sm-10">
                                            <span class="form-text m-b-none">Imagen 1</span>
                                            <div class="custom-file">
                                                <input id="logo1" type="file" name="imagen1">                                                
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->url_img1 ?></span>
                                                <?php echo form_error('imagen1', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <br>
                                            <span class="form-text m-b-none">Titulo 1</span>
                                            <input type="text" class="form-control" name="texto-titulo1" value="<?= $datos->text_titulo1 ?>">
                                            <?php echo form_error('texto-titulo1', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto 1</span>
                                             <textarea class="form-control" name="texto-slider1"><?= $datos->text_img1 ?></textarea>
                                            <!-- <input type="text" class="form-control" name="texto-slider1" value="<?= $datos->text_img1 ?>"> -->
                                            <?php echo form_error('texto-slider1', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br><br>
                                            <span class="form-text m-b-none">Imagen 2</span>
                                            <div class="custom-file">
                                                <input id="logo2" type="file" name="imagen2">
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->url_img2 ?></span>
                                                <?php echo form_error('imagen2', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <br>
                                            <span class="form-text m-b-none">Titulo 2</span>
                                            <input type="text" class="form-control" name="texto-titulo2" value="<?= $datos->text_titulo2 ?>">
                                            <?php echo form_error('texto-titulo2', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto 2</span>
                                            <textarea class="form-control" name="texto-slider2"><?= $datos->text_img2 ?></textarea>
                                            <!-- <input type="text" class="form-control" name="texto-slider2" value="<?= $datos->text_img2 ?>"> -->
                                            <?php echo form_error('texto-slider2', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br><br>
                                            <span class="form-text m-b-none">Imagen 3</span>
                                            <div class="custom-file">
                                                <input id="logo3" type="file" name="imagen3">
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->url_img3 ?></span>
                                                <?php echo form_error('imagen3', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <br>
                                            <span class="form-text m-b-none">Titulo 3</span>
                                            <input type="text" class="form-control" name="texto-titulo3" value="<?= $datos->text_titulo3 ?>">
                                            <?php echo form_error('texto-titulo3', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto 3</span>
                                            <textarea class="form-control" name="texto-slider3"><?= $datos->text_img3 ?></textarea>
                                            <!-- <input type="text" class="form-control" name="texto-slider3" value="<?= $datos->text_img3 ?>"> -->
                                            <?php echo form_error('texto-slider3', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br><br>
                                            <span class="form-text m-b-none">Imagen 4</span>
                                            <div class="custom-file">
                                                <input id="logo4" type="file" name="imagen4">
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->url_img4 ?></span>
                                                <?php echo form_error('imagen4', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <br>
                                            <span class="form-text m-b-none">Titulo 4</span>
                                            <input type="text" class="form-control" name="texto-titulo4" value="<?= $datos->text_titulo4 ?>">
                                            <?php echo form_error('texto-titulo4', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto 4</span>
                                            <textarea class="form-control" name="texto-slider4"><?= $datos->text_img4 ?></textarea>
                                            <!-- <input type="text" class="form-control" name="texto-slider4" value="<?= $datos->text_img4 ?>"> -->
                                            <?php echo form_error('texto-slider4', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br><br>
                                            <span class="form-text m-b-none">Imagen 5</span>
                                            <div class="custom-file">
                                                <input id="logo5" type="file" name="imagen5">
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->url_img5 ?></span>
                                                <?php echo form_error('imagen5', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <br>
                                            <span class="form-text m-b-none">Titulo 5</span>
                                            <input type="text" class="form-control" name="texto-titulo5" value="<?= $datos->text_titulo5 ?>">
                                            <?php echo form_error('texto-titulo5', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto 5</span>
                                            <textarea class="form-control" name="texto-slider5"><?= $datos->text_img5 ?></textarea>
                                           <!--  <input type="text" class="form-control" name="texto-slider5" value="<?= $datos->text_img5 ?>"> -->
                                            <?php echo form_error('texto-slider5', "<span style='color:red;display:block'>", "</span>") ?>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Texto Secundario: </label>

                                         <div class="col-sm-10">
                                            <span class="form-text m-b-none">Titulo Parte - 1</span>
                                            <input type="text" class="form-control" name="texto1" value="<?= $datos->titulo_p1 ?>">
                                            <?php echo form_error('texto1', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Titulo Parte - 2</span>
                                            <input type="text" class="form-control" name="texto2" value="<?= $datos->titulo_p2 ?>">
                                            <?php echo form_error('texto2', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto Bold - 1</span>
                                            <input type="text" class="form-control" name="texto3" value="<?= $datos->texto_bold1 ?>">
                                            <?php echo form_error('texto3', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto Normal - 2</span>
                                            <textarea class="form-control" name="texto4"><?= $datos->texto_normal2 ?></textarea>
                                            <!-- <input type="text" class="form-control" name="texto4" value="<?= $datos->texto_normal2 ?>"> -->
                                            <?php echo form_error('texto4', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto</span>
                                            <input type="text" class="form-control" name="texto5" value="<?= $datos->texto ?>">
                                            <?php echo form_error('texto5', "<span style='color:red;display:block'>", "</span>") ?>
                                         </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group row">
                                         <label class="col-sm-2 col-form-label">Video: </label>

                                         <div class="col-sm-10">

                                            <span class="form-text m-b-none">Imagen de Video</span>
                                            <div class="custom-file">
                                                <input id="logo_video" type="file" name="imagen_video">
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->img_video ?></span>
                                                <?php echo form_error('imagen_video', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>

                                            <span class="form-text m-b-none">Url video</span>
                                            <div class="custom-file">
                                                <input type="text" class="form-control" name="video1" value="<?= $datos->video ?>">
                                                <?php echo form_error('video1', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>

                                         </div>
                                    </div>

                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <input class="btn btn-primary btn-sm" type="submit" name="submit" value="Save changes">
                                            <!-- <input class="btn btn-white btn-sm" type="button" name="cancel" value="Cancel"> -->
                                        </div>
                                    </div>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                </div> <!-- /row -->
            </div>
            
            <div class="footer">
                <div class="float-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>backyard</strong>
                </div>
            </div> <!-- footer -->
        </div> <!-- /page-wrapper -->

        <!-- /Contenido -->

    </div> <!-- /wrapper -->