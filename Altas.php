<?php 
  session_start();
  
  require_once"menu.php";
  require_once "php/conexion.php";
  $conexion=conexion();
  $sql="SELECT * from tutores";
  $result=$conexion->query($sql);
  $result2=$conexion->query($sql);
if($_SESSION["autenticado"]!=1){
     header("Location: login.php");

 }

 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
  
   <script>
    function sololetras(e) {
        key=e.keyCode || e.which;
 
        teclado=String.fromCharCode(key).toLowerCase();
 
        letras="qwertyuiopasdfghjklñzxcvbnm ";
 
        especiales="8-37-38-46-164";
 
        teclado_especial=false;
 
        for(var i in especiales){
            if(key==especiales[i]){
                teclado_especial=true;
                break;
            }
        }
 
        if(letras.indexOf(teclado)==-1 && !teclado_especial){
            return false;
        }
    }
    </script>

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
        	<input type="text" name="" id="txt_Nombre" class="form-control input-sm" required="true" onkeypress="return sololetras(event)" onpaste="return false">
        	<label>Apellido paterno:</label>
        	<input type="text" name="" id="txt_Apellido_Paterno" class="form-control input-sm" required="true" onkeypress="return sololetras(event)" onpaste="return false"> 
        	<label>Apellido materno:</label>
        	<input type="text" name="" id="txt_Apellido_Materno" class="form-control input-sm " required="true" onkeypress="return sololetras(event)" onpaste="return false">
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
          <label>Tutor:</label>
          <select class="custom-select" id="txt_tutor" name="txt_tutor">
          
         <?php
        foreach ($result as $ver):
        
         
         ?>
        <option value="<?php echo $ver[0] ?>">
          <?php echo $ver[0] ?>
        </option>

      <?php endforeach; ?>
          </select>

      </div>
         <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="guardarnuevo">
        Agregar
        </button>
         <button type="submit" class="btn btn-danger" id="cancelar">
        Cancelar
        </button>
       </div> 
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
          <input type="text" name="" id="txt_Nombre_Modificaciones" class="form-control input-sm" required="true" onkeypress="return sololetras(event)" onpaste="return false">
          <label>Apellido Paterno:</label>
          <input type="text" name="" id="txt_Apellido_Paterno_Modificaciones" class="form-control input-sm" required="true"onkeypress="return sololetras(event)" onpaste="return false"> 
          <label>Apellido Materno:</label>
          <input type="text" name="" id="txt_Apellido_Materno_Modificaciones" class="form-control input-sm" required="true" onkeypress="return sololetras(event)" onpaste="return false">
          <label>Edad:</label>
          <input type="number" name="" id="txt_Edad_Modificaciones" class="form-control input-sm" required="true" >
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
          <label>Tutor:</label>
          <select class="custom-select" id="txt_tutor_Modificaciones" name="txt_tutor_Modificaciones">
            
         <?php
        foreach ($result2 as $ver2):
        
         
         ?>
        <option value="<?php echo $ver[0] ?>">
          <?php echo $ver2[0] ?>
        </option>

      <?php endforeach; ?>
          </select>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="actualizadatos" data-dismiss="modal">Actualizar</button><br>
                
      </div>
    </div>
  </div>
  <script type="text/javascript"src="js/funciones.js"></script>
  
</div>
  
</form>



<script src="librerias/jquery-3.2.1.min.js"></script>
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
          txt_tutor=$('#txt_tutor').val();
          alertify.error(txt_tutor);
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
                agregardatos(txt_Num_Control,txt_Nombre,txt_Apellido_Paterno,txt_Apellido_Materno,txt_Edad,txt_Semestre,txt_Carrera,txt_tutor); 
            }
            
           
        });




        $('#actualizadatos').click(function(){
            
          txt_Num_Control=$('#txt_Num_Control_Modificaciones').val();
          txt_Nombre=$('#txt_Nombre_Modificaciones').val();
          txt_Apellido_Paterno=$('#txt_Apellido_Paterno_Modificaciones').val();
          txt_Apellido_Materno=$('#txt_Apellido_Materno_Modificaciones').val();
          txt_Edad=$('#txt_Edad_Modificaciones').val();
          txt_Semestre=$('#txt_Semestre_Modificaciones').val();
          txt_Carrera=$('#txt_Carrera_Modificaciones').val();
          txt_tutor=$('#txt_tutor_Modificaciones').val();
          
          
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


