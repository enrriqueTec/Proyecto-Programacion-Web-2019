<?php 
  session_start();

  unset($_SESSION['consulta']);
  require_once"menu.php";
   require_once"php/conexion.php";
	$conexion=conexion();

	$sql="SELECT numControl,Nombre,primerAp,segundoAp,edad,semestre,carrera from alumnos";
				$result=mysqli_query($conexion,$sql);

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Seguimiento individual</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
    <link href="estilos/ui.css" rel="stylesheet" type="text/css" />
    <link href="estilos/ui.css.map" rel="stylesheet" type="text/css" />
    <link href="estilos/responsive.css" rel="stylesheet" />



</head>

<body>
    <img src="imagenes/logo.png" alt="Logo ITSJ" class="rounded-circle" style="heigth: 100px; width:100px; float: left;">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">

                <h4 class="font-weight-bold">INSTITUTO TECNOLÓGICO SUPERIOR DE JEREZ</h4>
                <h4 class="font-weight-bold">OFICINA DE ORIENTACIÓN EDUCATIVA</h4>
                <h4 class="font-weight-bold">PROGRAMA DE TUTORÍAS</h4>
                <h4 class="font-weight-bold">FICHA DE SEGUIMIENTO INDIVIDUAL</h4>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container">
        <form>
            <div class="form-row">
                <div class="col">
                    <label class="sm-3">Nombre del alumno</label>
                </div>
                <div class="col">
                    <label class="sm-3">Carrera</label>
                </div>
                <div class="col">
                    <label class="sm-3">Número de control</label>
                </div>



            </div>


            <div class="row">
                <div class="col">
                    <select id="buscador" class="custom-select form-control input-md col" id="selec_nombre" name="sel_nom">
                        <option value="0">Mostrar Todos</option>
                        <?php
				while($ver=mysqli_fetch_row($result)): 
			 ?>
                        <option value="<?php echo $ver[0] ?>">
                            <?php echo $ver[1]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$ver[2]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$ver[3]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$ver[6]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$ver[0]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"?>

                        </option>

                        <?php endwhile; ?>
                    </select>
                </div>
            </div>





        </form>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#buscador').select2();

                $('#buscador').change(function() {
                    $.ajax({
                        type: "post",
                        data: 'valor=' + $('#buscador').val(),
                        url: 'php/crearsession.php'
                    });
                });
            });

        </script>
    </div>

    <br><br>
    <div class="container">
        <table class="table-responsive table-bordered sm-6">
            <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Problemática identificada</th>
                    <th scope="col">Actividad remedial</th>
                    <th scope="col">Firma del alumno</th>
                    <th scope="col">Nombre del tutor</th>
                    <th scope="col">Firma del tutor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="date" class="form-control"></td>
                    <td><textarea class="form-control " name="" id=""></textarea> </td>
                    <td><textarea class="form-control" name="" id=""></textarea></td>
                    <td><textarea class="form-control" name="" id=""></textarea></td>
                    <td><textarea class="form-control" name="" id=""></textarea></td>
                    <td><textarea class="form-control" name="" id=""></textarea></td>
                </tr>
                <tr>
                    <td colspan="3">Motivo de la alta
                        <hr>
                        <textarea class="form-control" name="" id=""></textarea></td>
                    <td colspan="3">Resolución:
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                            <label class="custom-control-label" for="customControlValidation2">Favorable</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                            <label class="custom-control-label" for="customControlValidation3">No Favorable</label>
                            <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>
                    </td>


                </tr>

            </tbody>
        </table>


    </div>
    <br><br>
    <div class="container">
        <input type="button" value="Imprimir" class="btn btn-success" onclick="location.href='print_pdf.php'">
    </div>



    <script src="librerias/jquery-3.2.1.min.js"></script>
    <script src="js/funciones.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
    <script src="librerias/select2/js/select2.js"></script>
</body>

</html>
