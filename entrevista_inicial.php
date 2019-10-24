<?php 
  session_start();

  unset($_SESSION['consulta']);
  require_once"menu.php";
   require_once "php/conexion.php";
	$conexion=conexion();

	$sql="SELECT numControl,Nombre,primerAp,segundoAp,edad,semestre,carrera from alumnos";
				$result=mysqli_query($conexion,$sql);

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Entrevista inicial</title>
    
    <!--Template based on URL below-->
   <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="../librerias/select2/css/select2.css">
<link href="../estilos/ui.css" rel="stylesheet" type="text/css"/><link href="../estilos/ui.css.map" rel="stylesheet" type="text/css"/>
<link href="../estilos/responsive.css" rel="stylesheet"/>
</head>

<body>

     <img src="imagenes/logo.png" alt="Logo ITSJ" class="rounded-circle" style="heigth: 100px; width:100px; float: left;">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">

                <h4 class="font-weight-bold">INSTITUTO TECNOLÓGICO SUPERIOR DE JEREZ <br>
                OFICINA DE ORIENTACIÓN EDUCATIVA <br>
                PROGRAMA DE TUTORÍAS<br><br>
                ENTREVISTA INICIAL</h4>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>

    <main role="main" class="container">

        

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../librerias/jquery-3.2.1.min.js"></script>
  <script src="../js/funciones.js"></script>
	<script src="../librerias/bootstrap/js/bootstrap.js"></script>
	<script src="../librerias/alertifyjs/alertify.js"></script>
  <script src="../librerias/select2/js/select2.js"></script>

</body>
</html>