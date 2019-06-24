<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>BAYAR | Dashboard</title>

    <link href="<?= base_url() ?>public/css/admin/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/css/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

     <link href="<?= base_url() ?>public/css/admin/plugins/summernote/summernote-bs4.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?= base_url() ?>public/css/admin/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?= base_url() ?>public/js/admin/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?= base_url() ?>public/css/admin/animate.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/css/admin/style.css" rel="stylesheet">

</head>

<body>
	 <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="img/profile_small.jpg"/>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold"> <?= $nombre_admin ?> </span>
                                <span class="text-muted text-xs block">Administrador <b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                                <!-- <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                                <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="login.html">Logout</a></li> -->
                            </ul>
                        </div>
                    </li>
                    <li class="<?= ($menu == 'pagina_proyect') ? 'active' : '' ?>">
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Proyectos</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="<?= ($menu == 'pagina_proyect') ? 'active' : '' ?>"><a href="<?= base_url("admin/proyectos/pagina") ?>">Pagina</a></li>
                            <li class=""><a href="<?= base_url("admin/proyectos/eventos/listado") ?>">Eventos</a></li>
                            <li class=""><a href="<?= base_url("admin/proyectos/activaciones/listado") ?>">Activaciones</a></li>
                            <li class=""><a href="<?= base_url("admin/proyectos/construcciones/listado") ?>">Construcciones</a></li>
                            <li class=""><a href="<?= base_url("admin/proyectos/tecnologia/listado") ?>">Tecnologia</a></li>
                            <li class=""><a href="<?= base_url("admin/proyectos/tacticas/listado") ?>">Campañas Tacticas</a></li>
                            <li class=""><a href="<?= base_url("admin/proyectos/contenidos/listado") ?>">Contenidos</a></li>
                        </ul>
                    </li>
                    <li class="<?= ($menu == 'pagina_nosotros') ? 'active' : '' ?>">
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Nosotros</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="<?= ($menu == 'pagina_nosotros') ? 'active' : '' ?>"><a href="<?= base_url("admin/nosotros/pagina") ?>">Pagina</a></li>
                        </ul>
                    </li>
                    <li class="<?= ($menu == 'pagina_contacto') ? 'active' : '' ?>">
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Contacto</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="<?= ($menu == 'pagina_contacto') ? 'active' : '' ?>"><a href="<?= base_url("admin/contacto/pagina") ?>">Pagina</a></li>
                        </ul>
                    </li>

                    <li class="<?= ($menu == 'pagina_aviso') ? 'active' : '' ?>">
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Aviso de Privacidad</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="<?= ($menu == 'pagina_aviso') ? 'active' : '' ?>"><a href="<?= base_url("admin/aviso/pagina") ?>">Pagina</a></li>
                        </ul>
                    </li>
                </ul> <!-- /metismenu -->
            </div> <!-- /sidebar-collapse -->
        </nav> <!-- /navbar-default -->