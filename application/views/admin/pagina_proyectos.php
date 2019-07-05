
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
                    <h2>Proyectos</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Proyectos</a>
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
                                <?php echo form_open(base_url("admin/proyectos/pagina"), ["role"=>"form", "method"=>"POST"]) ?>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Texto Eventos</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="text-principal"><?= $datos->texto_principal ?></textarea>
                                            <!-- <input type="text" class="form-control" name="text-principal" value="<?= $datos->texto_principal ?>"> -->
                                            <?php echo form_error('text-principal', "<span style='color:red;display:block'>", "</span>") ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Texto Activaciones</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="text-activaciones"><?= $datos->texto_activaciones ?></textarea>
                                            <!-- <input type="text" class="form-control" name="text-activaciones" value="<?= $datos->texto_activaciones ?>"> -->
                                            <?php echo form_error('text-activaciones', "<span style='color:red;display:block'>", "</span>") ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Texto Construcciones</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="text-construcciones"><?= $datos->texto_construcciones ?></textarea>
                                            <!-- <input type="text" class="form-control" name="text-construcciones" value="<?= $datos->texto_construcciones ?>"> -->
                                            <?php echo form_error('text-construcciones', "<span style='color:red;display:block'>", "</span>") ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Texto Tecnologia</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="text-tecnologia"><?= $datos->texto_tecnologia ?></textarea>
                                            <!-- <input type="text" class="form-control" name="text-tecnologia" value="<?= $datos->texto_tecnologia ?>"> -->
                                            <?php echo form_error('text-tecnologia', "<span style='color:red;display:block'>", "</span>") ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Texto Tacticas</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="text-tacticas"><?= $datos->texto_tacticas ?></textarea>
                                            <!-- <input type="text" class="form-control" name="text-tacticas" value="<?= $datos->texto_tacticas ?>"> -->
                                            <?php echo form_error('text-tacticas', "<span style='color:red;display:block'>", "</span>") ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Texto Contenidos</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="text-contenidos"><?= $datos->texto_contenidos ?></textarea>
                                            <!-- <input type="text" class="form-control" name="text-contenidos" value="<?= $datos->texto_contenidos ?>"> -->
                                            <?php echo form_error('text-contenidos', "<span style='color:red;display:block'>", "</span>") ?>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Bullet Negro</label>
                                        <div class="col-sm-10">
                                            <span class="form-text m-b-none">Titulo</span>
                                            <input type="text" class="form-control" name="item1-titulo" value="<?= $datos->item1_titulo ?>"> 
                                            <?php echo form_error('item1-titulo', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto Bold</span>
                                            <input type="text" class="form-control" name="texto1-bold" value="<?= $datos->item1_text_bold ?>">
                                            <?php echo form_error('texto1-bold', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto</span>
                                            <textarea class="form-control" name="texto1"><?= $datos->item1_text ?></textarea>
                                            <!-- <input type="text" class="form-control" name="texto1" value="<?= $datos->item1_text ?>">  -->
                                            <?php echo form_error('texto1', "<span style='color:red;display:block'>", "</span>") ?>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Bullet Morado</label>
                                        <div class="col-sm-10">
                                            <span class="form-text m-b-none">Titulo</span>
                                            <input type="text" class="form-control" name="item2-titulo" value="<?= $datos->item2_titulo ?>"> 
                                            <?php echo form_error('item2-titulo', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto Bold</span>
                                            <input type="text" class="form-control" name="texto2-bold" value="<?= $datos->item2_text_bold ?>">
                                            <?php echo form_error('texto2-bold', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto</span>
                                             <textarea class="form-control" name="texto2"><?= $datos->item2_text ?></textarea>
                                            <!-- <input type="text" class="form-control" name="texto2" value="<?= $datos->item2_text ?>"> -->
                                            <?php echo form_error('texto2', "<span style='color:red;display:block'>", "</span>") ?>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Bullet Azul</label>
                                        <div class="col-sm-10">
                                            <span class="form-text m-b-none">Titulo</span>
                                            <input type="text" class="form-control" name="item3-titulo" value="<?= $datos->item3_titulo ?>">
                                            <?php echo form_error('item3-titulo', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto Bold</span>
                                            <input type="text" class="form-control" name="texto3-bold" value="<?= $datos->item3_text_bold ?>">
                                            <?php echo form_error('texto3-bold', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto</span>
                                            <textarea class="form-control" name="texto3"><?= $datos->item3_text ?></textarea>
                                            <!-- <input type="text" class="form-control" name="texto3" value="<?= $datos->item3_text ?>"> --> 
                                            <?php echo form_error('texto3', "<span style='color:red;display:block'>", "</span>") ?>
                                        </div>

                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Bullet Rosa</label>
                                        <div class="col-sm-10">
                                            <span class="form-text m-b-none">Titulo</span>
                                            <input type="text" class="form-control" name="item4-titulo" value="<?= $datos->item4_titulo ?>">
                                            <?php echo form_error('item4-titulo', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto Bold</span>
                                            <input type="text" class="form-control" name="texto4-bold" value="<?= $datos->item4_text_bold ?>">
                                            <?php echo form_error('texto4-bold', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto</span>
                                            <textarea class="form-control" name="texto4"><?= $datos->item4_text ?></textarea>
                                            <!-- <input type="text" class="form-control" name="texto4" value="<?= $datos->item4_text ?>"> -->
                                            <?php echo form_error('texto4', "<span style='color:red;display:block'>", "</span>") ?>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Bullet Verde</label>
                                        <div class="col-sm-10">
                                            <span class="form-text m-b-none">Titulo</span>
                                            <input type="text" class="form-control" name="item5-titulo" value="<?= $datos->item5_titulo ?>">
                                            <?php echo form_error('item5-titulo', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto Bold</span>
                                            <input type="text" class="form-control" name="texto5-bold" value="<?= $datos->item5_text_bold ?>">
                                            <?php echo form_error('texto5-bold', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Texto</span>
                                            <textarea class="form-control" name="texto5"><?= $datos->item5_text ?></textarea>
                                            <!-- <input type="text" class="form-control" name="texto5" value="<?= $datos->item5_text ?>"> -->
                                            <?php echo form_error('texto5', "<span style='color:red;display:block'>", "</span>") ?>
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