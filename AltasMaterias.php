<?php 
  session_start();
  
  require_once"menu.php";

if($_SESSION["autenticado"]!=1){
     header("Location: login.php");
    
 }
 
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Tabla Tutores</title>
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


<div class="modal fade" id="modalNuevoTutor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="myModalLabel">Agregar nuevo tutor</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>


      <form>
      <div class="modal-body">
        <label>Clave tutor:</label>
          <input type="text" name="" id="txt_Clave_Tutor" class="form-control input-sm" required="true" >
        	<label>Nombre:</label>
        	<input type="text" name="" id="txt_Nombre_Tutor" class="form-control input-sm" required="true" >
        	<label>Apellido paterno:</label>
        	<input type="text" name="" id="txt_Apellido_Paterno_Tutor" class="form-control input-sm" required="true" > 
        	<label>Apellido materno:</label>
        	<input type="text" name="" id="txt_Apellido_Materno_Tutor" class="form-control input-sm " required="true" >
        	<label>Grado academico:</label>
        	<input type="text" width="20px" name="" id="txt_Grado_Tutor" class="form-control input-sm" required="true" >
          <label>telefono:</label>
          <input type="number" name="" id="txt_Telefono_Tutor" class="form-control input-sm" required="true" >
          
          <!--<input type="selected" name="" id="txt_Carrera" class="form-control input-sm" > -->
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="guardarnuevotutor">
        Agregar
        </button>
         <button type="button" class="btn btn-danger" id="cancelar">
        Cancelar
        </button>
       </div>
     </form>
      </div>
    </div>
  </div>


<!-- Modal para edicion de datos -->

<form>
    <div class="modal fade" id="modalEdicionTutores" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       
      </div>
      <div class="modal-body">
             <label>Clave:</label>
      		<input type="text" name="" id="txt_Clave_Modificaciones" class="form-control input-sm" 
          disabled="true" required="true">
          <label>Nombre:</label>
          <input type="text" name="" id="txt_Nombre_Modificaciones" class="form-control input-sm" required="true">
          <label>Apellido Paterno:</label>
          <input type="text" name="" id="txt_Apellido_Paterno_Modificaciones" class="form-control input-sm" required="true"> 
          <label>Apellido Materno:</label>
          <input type="text" name="" id="txt_Apellido_Materno_Modificaciones" class="form-control input-sm" required="true">
          <label>Grado académico:</label>
          <input type="text" name="" id="txt_Grado_Modificaciones" class="form-control input-sm" required="true">
          <label>Teléfono:</label>
          <input type="number" name="" id="txt_Telefono_Modificaciones" class="form-control input-sm" required="true">
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="actualizadatosTutor" data-dismiss="modal">Actualizar</button><br>
        <button type="button" class="btn btn-danger" id="Cancelar" data-dismiss="modal">Cancelar</button>
        
      </div>
    </div>
  </div>
  
  <script type="text/javascript"src="js/funcionesTutores.js"></script>
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
		$('#tabla').load('componentes/tablamaterias.php');
    $('#buscador').load('componentes/buscadorMaterias.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){

        $('#guardarnuevotutor').click(function(){
          txt_Clave_Tutor=$('#txt_Clave_Tutor').val();
          txt_Nombre_Tutor=$('#txt_Nombre_Tutor').val();
          txt_Apellido_Paterno_Tutor=$('#txt_Apellido_Paterno_Tutor').val();
          txt_Apellido_Materno_Tutor=$('#txt_Apellido_Materno_Tutor').val();
          txt_Grado_Tutor=$('#txt_Grado_Tutor').val();
          txt_Telefono_Tutor=$('#txt_Telefono_Tutor').val();
          
            if(txt_Clave_Tutor.trim()==""){
               alertify.error("Debes ingresar una clave válida :(");
            
            }else if(txt_Nombre_Tutor.trim()==""){
             alertify.error("Debes ingresar un nombre :(");
            }else if(txt_Apellido_Paterno_Tutor.trim()==""){
             alertify.error("Debes ingresar un Apellido paterno :(");
            }else if(txt_Apellido_Materno_Tutor.trim()==""){
             alertify.error("Debes ingresar un Apellido Materno :(");
            }else if(txt_Grado_Tutor.trim()==""){
             alertify.error("Debes ingresar un Apellido Materno :(");
            }else if(txt_Telefono_Tutor.trim()==""){
             alertify.error("Debes ingresar un Apellido Materno :(");
            }else{
                agregardatosMateria(txt_Clave_Tutor,txt_Nombre_Tutor,txt_Apellido_Paterno_Tutor,txt_Apellido_Materno_Tutor,txt_Grado_Tutor,txt_Telefono_Tutor); 
            }
            
           
        });




        $('#actualizadatosTutor').click(function(){
            
            txt_Clave_Modificaciones=$('#txt_Clave_Modificaciones').val();
          txt_Nombre_Modificaciones=$('#txt_Nombre_Modificaciones').val();
          txt_Apellido_Paterno_Modificaciones=$('#txt_Apellido_Paterno_Modificaciones').val();
          txt_Apellido_Materno_Modificaciones=$('#txt_Apellido_Materno_Modificaciones').val();
          txt_Grado_Modificaciones=$('#txt_Grado_Modificaciones').val();
          txt_Telefono_Modificaciones=$('#txt_Telefono_Modificaciones').val();
         
           if(txt_Nombre_Modificaciones.trim()==""){
             alertify.error("Debes ingresar un nombre :(");
            }else if(txt_Apellido_Paterno_Modificaciones.trim()==""){
             alertify.error("Debes ingresar un Apellido paterno :(");
            }else if(txt_Apellido_Materno_Modificaciones.trim()==""){
             alertify.error("Debes ingresar un Apellido Materno :(");
            }else if(txt_Grado_Modificaciones.trim()==""){
              alertify.error("Debes ingresar un Apellido Materno :(");  
            }else if(txt_Telefono_Modificaciones.trim()==""){
               alertify.error("Debes ingresar un Apellido Materno :("); 
            }
            else{
                 actualizaDatosMateria();
            }
            
         
        });

    });

</script>


