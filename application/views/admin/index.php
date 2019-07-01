<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="descripcion del sitio web">

    <title>BACKYARD</title>

    <link href="public/css/admin/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="public/css/admin/animate.css" rel="stylesheet">
    <link href="public/css/admin/style.css" rel="stylesheet">

    <style type="text/css">
        .error {
            color: red;
        }
    </style>

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">BY</h1>

            </div>
            <h3>- BACKYARD -</h3>
            <!-- <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views. -->
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>ADMINISTRADOR</p>
            <?php echo form_open(base_url("admin"), ["class"=>"m-t", "role"=>"form", "method"=>"POST"]) ?>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="<?= set_value('email') ?>">
                    <?php echo form_error('email', "<span style='color:red;display:block'>", "<span>") ?>
                    <span style='color:red;display:block'> <?= @$error_user ?> </span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <?php echo form_error('password', "<span style='color:red;display:block'>", "<span>") ?>
                    <span style='color:red;display:block'> <?= @$error_pass ?> </span>
                </div>
                <input type="submit" name="submit" class="btn btn-primary block full-width m-b" value="Login">

                <a href="#"><small>¿Olvidaste tu contraseña?</small></a>
            <?php echo form_close() ?>
        </div>
    </div>

</body>

</html>
