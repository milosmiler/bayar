
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
                                <?php echo form_open(base_url("admin/aviso/pagina"), ["role"=>"form", "method"=>"POST", "name"=>"avform"]) ?>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group row"><label class="col-sm-2 col-form-label">Aviso de Privacidad: </label>
                                    <div class="col-sm-10">
                                        <span class="form-text m-b-none">Aviso de Privacidad</span>
                                        <textarea class="form-control" style="height: 500px;" name="aviso1"><?= $datos->texto ?></textarea>
                                         <input type="hidden" name="aviso_cueron">
                                        <?php echo form_error('aviso1', "<span style='color:red;display:block'>", "</span>") ?>
                                        <br>
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