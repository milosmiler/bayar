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
                    <h2>Campañas Tacticas</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Proyectos</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a>Campañas Tacticas</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Editar</strong>
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
                                    <span style='color:green;display:block;margin-left:5%;font-weight:bolder;font-size:14px'><?= @$this->session->flashdata('success') ?></span>
                                </div>
                                <?php echo form_open(base_url("admin/proyectos/tacticas/editar/$datos->slug"), ["role"=>"form", "enctype"=>"multipart/form-data", "method"=>"POST"]) ?>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Card: </label>
                                        <div class="col-sm-10">
                                            <span class="form-text m-b-none">Titulo</span>
                                            <input type="text" class="form-control" name="titulo" value="<?= $datos->titulo ?>">
                                            <?php echo form_error('titulo', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Titulo parte 2</span>
                                            <input type="text" class="form-control" name="titulop2" value="<?= $datos->titulop2 ?>">
                                            <?php echo form_error('titulop2', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Titulo parte 2</span>
                                            <input type="text" class="form-control" name="titulop2" value="<?= $datos->titulop2 ?>">
                                            <?php echo form_error('titulop2', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Descripción</span>
                                            <textarea class="form-control" name="descripcion"><?= $datos->descripcion ?></textarea>
                                            <?php echo form_error('descripcion', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Imagen</span>
                                            <div class="custom-file">
                                                <input id="slogo1" type="file" name="s_imagen1">
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->imagen1 ?></span>
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
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->imagen2 ?></span>
                                                <?php echo form_error('s_imagen2', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <br>
                                            <span class="form-text m-b-none">Titulo</span>
                                            <input type="text" class="form-control" name="titulo2" value="<?= $datos->descripcion2 ?>">
                                            <?php echo form_error('titulo2', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Imagen de Descripción</span>
                                            <div class="custom-file">
                                                <input id="slogo1" type="file" name="s_imagen3">
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->imagen3 ?></span>
                                                <?php echo form_error('s_imagen3', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <br>
                                            <span class="form-text m-b-none">Descripción</span>
                                            <textarea class="form-control" name="descripcion2"><?= $datos->descripcion3 ?></textarea>
                                            <?php echo form_error('descripcion2', "<span style='color:red;display:block'>", "</span>") ?>
                                            <br>
                                            <span class="form-text m-b-none">Imagen de Video</span>
                                            <div class="custom-file">
                                                <input id="slogo1" type="file" name="s_imagen4">
                                                <span style="margin-left: 20px; color: #000; font-weight: bold;"><?= $datos->imagen4 ?></span>
                                                <?php echo form_error('s_imagen4', "<span style='color:red;display:block'>", "</span>") ?>
                                            </div>
                                            <span class="form-text m-b-none">URL Video:</span>
                                            <input type="text" class="form-control" name="url_video" value="<?= $datos->video ?>">
                                            <?php echo form_error('url_video', "<span style='color:red;display:block'>", "</span>") ?>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <input class="btn btn-primary btn-sm" type="submit" name="submit" value="Save changes">
                                            <input class="btn btn-primary btn-sm delete" style="background: red; border: red 1px solid" type="submit" formaction="/bayarp/admin/proyectos/tacticas/eliminar/<?= $datos->slug ?>" name="submit" value="Delete">
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