<?php session_start(); ?>
<html>

<head>
    <title>Formulario de Registro</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
    <link rel="stylesheet" type="text/css" href="estilos/login.css">
    <meta charset="utf-8">
</head>

<body>
    <?php include "menu.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                
                    <form role="form" name="login" action="php/login.php" method="post" class="form-signin">
                      <img src="imagenes/logo.png" alt="logoTec" class="rounded mx-auto d-block img-thumbnail img">
                       <h1 class="align-center">Ingresar</h1>
                        <div class="form-group">
                            <label for="username">Nombre de usuario o email</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                        </div>

                        <button type="submit" class="btn btn-lg btn-success btn-block">Acceder</button>
                    </form>
                </div>
            </div>
        </div>
   
    <script src="js/valida_login.js"></script>

    <script src="librerias/jquery-3.2.1.min.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
    <script src="librerias/select2/js/select2.js"></script>
</body>

</html>
