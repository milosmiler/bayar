        <!-- Contenido -->

         <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a href="login.html">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>
                </nav>
            </div> <!-- /row -->

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Activaciones</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Proyectos</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a>Activaciones</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Crear</strong>
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
                                <?php echo form_open(base_url("admin/proyectos/activaciones/crear"), ["role"=>"form", "enctype"=>"multipart/form-data", "method"=>"POST"]) ?>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Card: </label>
                                        <div class="col-sm-10">
                                            <span class="form-text m-b-none">Titulo</span>
                                            <input type="text" class="form-control" name="titulo" value="<?= set_value("titulo") ?>">
                                            <?php echo form_error('titulo', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Descripción</span>
                                            <input type="text" class="form-control" name="descripcion" value="<?= set_value("descripcion") ?>">
                                            <?php echo form_error('descripcion', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Imagen</span>
                                            <div class="custom-file">
                                                <input id="slogo1" type="file" name="s_imagen1">                                
                                                <?php echo form_error('s_imagen1', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Contenido: </label>
                                        <div class="col-sm-10">
                                            <span class="form-text m-b-none">Background</span>
                                            <div class="custom-file">
                                                <input id="slogo1" type="file" name="s_imagen2">
                                                <?php echo form_error('s_imagen2', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <br>
                                            <span class="form-text m-b-none">Titulo</span>
                                            <input type="text" class="form-control" name="titulo2" value="<?= set_value("titulo2") ?>">
                                            <?php echo form_error('titulo2', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Imagen de Descripción</span>
                                            <div class="custom-file">
                                                <input id="slogo1" type="file" name="s_imagen3">                                
                                                <?php echo form_error('s_imagen3', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <br>
                                            <span class="form-text m-b-none">Descripción</span>
                                            <textarea class="form-control" name="descripcion2"><?= set_value("descripcion2") ?></textarea>
                                            <?php echo form_error('descripcion2', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Imagen de Video</span>
                                            <div class="custom-file">
                                                <input id="slogo1" type="file" name="s_imagen4">                                
                                                <?php echo form_error('s_imagen4', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <span class="form-text m-b-none">Video</span>
                                            <div class="custom-file">
                                                <input id="slogo1" type="file" name="s_imagen5">                                
                                                <?php echo form_error('s_imagen5', "<span style='color:red;display:block'>", "</span>") ?>
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