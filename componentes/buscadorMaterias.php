<?php 
	require_once "../php/conexion.php";
	$conexion=conexion();

	$sql="SELECT * from tutores";
				$result=$conexion->query($sql);

 ?>
<br><br>
<div class="row">
	<div class="col-sm-8"></div>
	<div class="col-sm-4">
		<label>CONSULTAR</label>
		<select id="buscadorvivo" class="form-control input-sm">
			<option value="0">Mostrar Todos</option>
			<?php
				foreach ($result as $ver):
				
				 
			 ?>
				<option value="<?php echo $ver[0] ?>">
					<?php echo $ver[0]." ".$ver[1]." ".$ver[2]." ".$ver[3]." ".$ver[4]." ".$ver[5]?>
				</option>

			<?php endforeach; ?>

		</select>
	</div>
</div>


	<script type="text/javascript">
		$(document).ready(function(){
			$('#buscadorvivo').select2();

			$('#buscadorvivo').change(function(){
				$.ajax({
					type:"post",
					data:'valor=' + $('#buscadorvivo').val(),
					url:'php/crearsession.php',
					success:function(r){
						$('#tablamaterias').load('componentes/tablamaterias.php');
					}
				});
			});
		});
	</script>