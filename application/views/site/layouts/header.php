<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title> <?= $titulo ?> </title>
    <link href="<?= base_url() ?>public/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>public/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>public/images/favicon.ico">
    <meta name="description" content="descripcion del sitio web">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta property="og:title" content=" ">
    <meta property="og:site_name" content=" ">
    <meta property="og:url" content=" ">
    <meta property="og:description" content=" ">
    <meta property="og:image" content=" ">
  </head>
  <body> 
    <header>
      <div class="container flex">
        <nav class="menu" id="navs">
          <a class="close">
            <i class="fa fa-times"></i>
          </a>
          <a class="item-nav" href="<?= base_url() ?>">Proyectos</a>
          <a class="item-nav" href="<?= base_url('nosotros') ?>">Nosotros</a>
          <a class="item-nav" href="<?= base_url('contacto') ?>">Contacto</a>
        </nav>
        <span class="burger"><i class="fa fa-bars"></i></span>
        <figure class="logo"><img src="<?= base_url() ?>public/images/logo.png"></figure>
      </div>
    </header>