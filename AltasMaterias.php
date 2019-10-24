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
    <div id="buscadormaterias"></div>
		<div id="tablamaterias"></div>
	</div>

	<!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega tutor</h4>
      </div>


      <form>
      <div class="modal-body">
        <label>Clave tutor:</label>
          <input type="text" name="" id="txt_clave_tutor" class="form-control input-sm" required="true" >
        	<label>Nombre</label>
        	<input type="text" name="" id="txt_Nombre_tutor" class="form-control input-sm" required="true">
        	<label>Primer Apellido</label>
        	<input type="text" name="" id="txt_primerAp_Tutor" class="form-control input-sm" required="true"> 
        	<label>Segundo Apellido</label>
        	<input type="text" name="" id="txt_segundoAp_Tutor" class="form-control input-sm"required="true" > 
        	<label>Grado Académico</label>
        	<input type="text" name="" id="txt_gradoAcademico" class="form-control input-sm"required="true" > 
        	<label>Teléfono</label>
        	<input type="number" name="" id="txt_numero_tutor" class="form-control input-sm" required="true"> 
        	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="guardarTutor">
        Agregar
        </button>
       </div>
     </form>
      </div>
    </div>
  </div>


<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
      		<input type="text" name="" id="txt_nombre_materia_modificaciones" class="form-control input-sm" 
          disabled="true">
          <label>NOMBRE:</label>
          <input type="text" name="" id="txt_Nombre_Modificaciones" class="form-control input-sm">
          <label>CREDITOS:</label>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>
  <script type="text/javascript"src="js/funciones.js"></script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablamaterias').load('componentes/tablamaterias.php');
    $('#buscadorMaterias').load('componentes/buscadorMateria.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){

        $('#guardarTutor').click(function(){
          txt_clave_tutor=$('#txt_tutor').val();
          txt_Nombre_tutor=$('#txt_Nombre_tutor').val();
          txt_primerAp_tutor=$('#txt_primerAp_tutor').val();
          txt_segundoAp_tutor=$('#txt_primerAp_tutor').val();
          txt_gradoAcademico=$('#txt_primerAp_tutor').val();
          txt_numero_tutor=$('#txt_primerAp_tutor').val();
          
          
          if(txt_clave_tutor.trim()==""){
               alertify.error("Debes ingresar una clave válida :(");
            
            }else if(txt_Nombre_tutor.trim()==""){
             alertify.error("Debes ingresar un nombre :(");
            }else if(txt_primerAp_tutor.trim()==""){
             alertify.error("Debes ingresar un Apellido paterno :(");
            }else if(txt_segundoAp_tutor.trim()==""){
             alertify.error("Debes ingresar un Apellido Materno :(");
            }else if(txt_gradoAcademico.trim()==""){
             alertify.error("Debes ingresar un grado académico :(");
            }else if(txt_numero_tutor.trim()==""){
             alertify.error("Debes ingresar un numero de contacto :(");
            }
            else{
       agregardatosMateria(txt_clave_tutor,txt_Nombre_tutor,txt_primerAp_tutor,txt_segundoAp_tutor,txt_gradoAcademico,txt_numero_Tutor); 
            }
            

   
        });




        $('#actualizadatos').click(function(){
          actualizaDatos();
        });

    });

</script>