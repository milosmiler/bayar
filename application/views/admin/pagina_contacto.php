
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
                    <h2>Contacto</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Contacto</a>
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
                                <?php echo form_open(base_url("admin/contacto/pagina"), ["role"=>"form", "enctype"=>"multipart/form-data", "method"=>"POST"]) ?>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Direccion: </label>
                                    <div class="col-sm-10">
                                        <span class="form-text m-b-none">Direccion Parete 1</span>
                                        <input type="text" class="form-control" name="direccion1" value="<?= $datos->direccion_parte1 ?>">
                                        <?php echo form_error('direccion1', "<span style='color:red;display:block'>", "</span>") ?>
                                        <br>
                                        <span class="form-text m-b-none">Direccion Parete 2</span>
                                        <input type="text" class="form-control" name="direccion2" value="<?= $datos->direccion_parte2 ?>">
                                        <?php echo form_error('direccion2', "<span style='color:red;display:block'>", "</span>") ?>
                                    </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Telefono de Contacto: </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="telefono" value="<?= $datos->telefono_contacto ?>"> 
                                            <?php echo form_error('telefono', "<span style='color:red;display:block'>", "</span>") ?>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Email de Contacto: </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="email" value="<?= $datos->email_contacto ?>"> 
                                            <?php echo form_error('email', "<span style='color:red;display:block'>", "</span>") ?>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Slider: </label>
                                        <div class="col-sm-10">
                                            <span class="form-text m-b-none">Imagen 1</span>
                                            <div class="custom-file">
                                                <input id="slogo1" type="file" name="s_imagen1">                                
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->imagen1 ?></span>
                                                <?php echo form_error('s_imagen1', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <br><br>
                                            <span class="form-text m-b-none">Imagen 2</span>
                                            <div class="custom-file">
                                                <input id="slogo1" type="file" name="s_imagen2">                                                
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->imagen2 ?></span>
                                                <?php echo form_error('s_imagen2', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <br><br>
                                            <span class="form-text m-b-none">Imagen 3</span>
                                            <div class="custom-file">
                                                <input id="slogo1" type="file" name="s_imagen3">                                                
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->imagen3 ?></span>
                                                <?php echo form_error('s_imagen3', "<span style='color:red;display:block'>", "</span>") ?>
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
                    <strong>Copyright</strong> Example Company &copy; 2014-2018
                </div>
            </div> <!-- footer -->
        </div> <!-- /page-wrapper -->

        <!-- /Contenido -->

    </div> <!-- /wrapper -->