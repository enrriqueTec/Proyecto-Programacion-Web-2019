<?php 
  session_start();

  unset($_SESSION['consulta']);
  require_once"menu.php";

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Tabla dinamica</title>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
<link href="estilos/home.css" rel="stylesheet" type="text/css"/>
</head>
<body>



<!-- SECCION PRINCIPAL-->
    
    <!-- EL EVENTO-->
<main id="main">
    <div id="carrusel" class="carousel slide" data-ride="carousel" data-pause="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 offset-md-6 text-center text-right">
                    <h2>Feria Internacional de Jerez 2020</h2>
                    <p class="d-none d-md-block">Jerez será sede este año 2020 con una de las mejores ferias del
                    mundo. Coon artistas de talla mundial, los mejores patrocinadores
                    y visitantes de los 5 continentes. No te quedes sin asistir a este magno evento, mira el programa y compra tus entradas!!</p>
                    <a href="#" class="btn btn-outline-dark" role="button">Quiero tocar con mi banda</a>
                <a href="#" class="btn btn-success" type="button">Comprar entradas</a>
                </div>
                
            </div>
        </div>
    </div>
  </div>
 
</div>
    
</main>
        
    <!--FIN DEL EVENTO-->
    
    <!--FIN SECCION PRINCIPAL-->
    <!--FIN SECCION PRINCIPAL-->
 
</body>

<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
</html>

