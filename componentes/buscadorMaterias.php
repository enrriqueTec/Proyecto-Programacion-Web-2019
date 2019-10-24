<?php 
	require_once "../php/conexion.php";
	$conexion=conexion();
	$sql="SELECT clave_tutor, nombreTutor, primerApTutor,segundoApTutor, gradoAcademico,telefono from tutores";
				$result=mysqli_query($conexion,$sql);

 ?>
<br><br>
<div class="row">
	<div class="col-sm-8"></div>
	<div class="col-sm-4">
		<label>CONSULTAR</label>
		<select id="buscadormateria" class="form-control input-sm">
			<option value="0">Mostrar Todos</option>
			<?php
				while($ver=mysqli_fetch_row($result)): 
			 ?>
				<option value="<?php echo $ver[0] ?>">
					<?php echo $ver[0]." ".$ver[1]." ".$ver[2]." ".$ver[3]." ".$ver[4]." ".$ver[5] ?>
				</option>

			<?php endwhile; ?>

		</select>
	</div>
</div>


	<script type="text/javascript">
		$(document).ready(function(){
			$('#buscadormateria').select2();

			$('#buscadormateria').change(function(){
				$.ajax({
					type:"post",
					data:'valor=' + $('#buscadormateria').val(),
					url:'php/crearsession.php',
					success:function(r){
						$('#tabla').load('componentes/tablamaterias.php');
					}
				});
			});
		});
	</script>