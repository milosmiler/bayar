
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
                            <strong>Listado</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2"></div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content animated fadeInUp">
                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>LISTADO DE CAMPAÑAS TACTICAS</h5>
                                <span style='color:green;display:block;margin-left:5%;font-weight:bolder;font-size:14px'><?= @$this->session->flashdata('success') ?></span>
                                <div class="ibox-tools">
                                    <a href="<?= base_url("admin/proyectos/tacticas/crear") ?>" class="btn btn-primary btn-xs">Crear nuevo evento</a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="project-list">
                                    <?php 

                                        if ($datos->result() == null) {
                                            echo "<p> No se encontraron resultados</p>";
                                        }
                                        else { ?>

                                            <table class="table table-hover">
                                                <tbody>

                                                <?php foreach ($datos->result() as $data) { ?>
                                                        
                                                        <tr>
                                                            <td class="project-status">
                                                                <span class="label label-primary"> <?= $data->tact_id ?> </span>
                                                            </td>
                                                            <td class="project-title">
                                                                <a href="#"> <?= $data->titulo ?> </a>
                                                            </td>
                                                            <td class="project-people">
                                                                <p> <?= $data->slug ?> </p>
                                                            </td>
                                                            <td class="project-people">
                                                                <p> <?= $data->descripcion ?> </p>
                                                            </td>
                                                            <td class="project-people">
                                                                <p> <?= $data->create_at ?> </p>
                                                            </td>
                                                            <td class="project-actions">
                                                                <a href="<?= base_url("single/$data->slug/tacticas") ?>" target="_blank" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                                                <a href="<?= base_url("admin/proyectos/tacticas/editar/".$data->slug) ?>" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                                            </td>
                                                        </tr>

                                                <?php } ?>
                                                </tbody>
                                            </table>
                                <?php   } ?>
                            
                                </div><!-- project-list -->
                            </div>
                        </div><!-- ibox -->
                    </div><!-- wrapper -->
                </div> <!-- col-lg-12 -->
            </div><!-- row -->

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