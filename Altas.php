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




	
</head>
<body>


	<div class="container">
    <div id="buscador"></div>
		<div id="tabla"></div>
	</div>

	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="myModalLabel">Agregar nuevo Alumno</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>


      <form>
      <div class="modal-body">
        <label>No. Control:</label>
          <input type="text" minLength="8" maxlength="9" name="" id="txt_Num_Control" class="form-control input-sm" required="true" >
        	<label>Nombre:</label>
        	<input type="text" name="" id="txt_Nombre" class="form-control input-sm" required="true" >
        	<label>Apellido paterno:</label>
        	<input type="text" name="" id="txt_Apellido_Paterno" class="form-control input-sm" required="true" > 
        	<label>Apellido materno:</label>
        	<input type="text" name="" id="txt_Apellido_Materno" class="form-control input-sm " required="true" >
        	<label>Edad:</label>
        	<input type="number" max="120" min="15" width="20px" name="" id="txt_Edad" class="form-control input-sm" required="true" >
          <label>Semestre:</label>
          <input type="number" max="12" min="1" name="" id="txt_Semestre" class="form-control input-sm" required="true" >
          <label>Carrera:</label>
          <select class="custom-select" id="txt_Carrera" name="txt_Carrera">
              <option>Ingeniería en Sistemas Computacionales</option>
              <option>Ingeniería en Industrias Alimentarias</option>
              <option>Ingeniería en Mecatrónica</option>
              <option>Licenciatura en administración</option>
              <option>Contador público</option>
          </select>
          <!--<input type="selected" name="" id="txt_Carrera" class="form-control input-sm" > -->
          <label for="">Estado:</label>
            <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                            <label class="custom-control-label" for="customControlValidation2">Inscrito</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                            <label class="custom-control-label" for="customControlValidation3">No inscrito</label>
                            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="guardarnuevo">
        Agregar
        </button>
         <button type="submit" class="btn btn-danger" id="cancelar">
        Cancelar
        </button>
       </div>
     </form>
      </div>
    </div>
  </div>


<!-- Modal para edicion de datos -->

<form>
    <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       
      </div>
      <div class="modal-body">
      		<input type="text" name="" id="txt_Num_Control_Modificaciones" class="form-control input-sm" 
          disabled="true" required="true">
          <label>Nombre:</label>
          <input type="text" name="" id="txt_Nombre_Modificaciones" class="form-control input-sm" required="true">
          <label>Apellido Paterno:</label>
          <input type="text" name="" id="txt_Apellido_Paterno_Modificaciones" class="form-control input-sm" required="true"> 
          <label>Apellido Materno:</label>
          <input type="text" name="" id="txt_Apellido_Materno_Modificaciones" class="form-control input-sm" required="true">
          <label>Edad:</label>
          <input type="number" name="" id="txt_Edad_Modificaciones" class="form-control input-sm" required="true">
          <label>Semestre:</label>
          <input type="number" name="" id="txt_Semestre_Modificaciones" class="form-control input-sm" required="true">
          <label>Carrera:</label>
          <select class="custom-select" id="txt_Carrera_Modificaciones" name="txt_Carrera_Modificaciones"required="true">
              <option>Ingeniería en Sistemas Computacionales</option>
              <option>Ingeniería en Industrias Alimentarias</option>
              <option>Ingeniería en Mecatrónica</option>
              <option>Licenciatura en administración</option>
              <option>Contador público</option>
          </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="actualizadatos" data-dismiss="modal">Actualizar</button><br>
        <button type="button" class="btn btn-danger" id="Cancelar" data-dismiss="modal">Cancelar</button>
        
      </div>
    </div>
  </div>
  <script type="text/javascript"src="js/funciones.js"></script>
  
</div>
  
</form>



<script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){

        $('#guardarnuevo').click(function(){
          txt_Num_Control=$('#txt_Num_Control').val();
          txt_Nombre=$('#txt_Nombre').val();
          txt_Apellido_Paterno=$('#txt_Apellido_Paterno').val();
          txt_Apellido_Materno=$('#txt_Apellido_Materno').val();
          txt_Edad=$('#txt_Edad').val();
          txt_Semestre=$('#txt_Semestre').val();
          txt_Carrera=$('#txt_Carrera').val();
          
            if(txt_Num_Control.trim()==""){
               alertify.error("Debes ingresar un numero de control válido :(");
            
            }else if(txt_Nombre.trim()==""){
             alertify.error("Debes ingresar un nombre :(");
            }else if(txt_Apellido_Paterno.trim()==""){
             alertify.error("Debes ingresar un Apellido paterno :(");
            }else if(txt_Apellido_Materno.trim()==""){
             alertify.error("Debes ingresar un Apellido Materno :(");
            }
            else{
                agregardatos(txt_Num_Control,txt_Nombre,txt_Apellido_Paterno,txt_Apellido_Materno,txt_Edad,txt_Semestre,txt_Carrera); 
            }
            
           
        });




        $('#actualizadatos').click(function(){
            
            txt_Num_Control=$('#txt_Num_Control').val();
          txt_Nombre=$('#txt_Nombre').val();
          txt_Apellido_Paterno=$('#txt_Apellido_Paterno').val();
          txt_Apellido_Materno=$('#txt_Apellido_Materno').val();
          txt_Edad=$('#txt_Edad').val();
          txt_Semestre=$('#txt_Semestre').val();
          txt_Carrera=$('#txt_Carrera').val();
          
            if(txt_Num_Control.trim()==""){
               alertify.error("Debes ingresar un numero de control válido :(");
            
            }else if(txt_Nombre.trim()==""){
             alertify.error("Debes ingresar un nombre :(");
            }else if(txt_Apellido_Paterno.trim()==""){
             alertify.error("Debes ingresar un Apellido paterno :(");
            }else if(txt_Apellido_Materno.trim()==""){
             alertify.error("Debes ingresar un Apellido Materno :(");
            }
            else{
                 actualizaDatos();
            }
            
         
        });

    });

</script>


