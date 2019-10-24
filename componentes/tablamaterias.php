
<?php 
	session_start();
	
	require_once "../php/conexion.php";

	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
	<center><h2>Materias</h2></center>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar materias 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
		
		
			<tr>
				<td>Clave:</td>
				<td>Nombre:</td>
				<td>Primer apellido:</td>
				<td>Segundo apellido:</td>
				<td>Grado academico:</td>
				<td>Número telefónico:</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>

			<?php 
if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
$sql="SELECT * from tutores where clave='$idp'";
}else{
						$sql="SELECT * from tutores";
					}
				}else{
					$sql="SELECT * from tutores";
				}
					
				$res=mysqli_query($conexion,$sql);
				while($tut=mysqli_fetch_row($res)){ 

					$datos=$tut[0]."||".
						   $tut[1]."||".
                           $tut[2]."||".
                           $tut[3]."||".
                           $tut[4]."||".
						   $tut[5]."||";
			 ?>

			<tr>
			<td><?php echo $tut[0] ?></td>
				<td><?php echo $tut[1] ?></td>
				<td><?php echo $tut[2] ?></td>
				<td><?php echo $tut[3] ?></td>
				<td><?php echo $tut[4] ?></td>
				<td><?php echo $tut[5] ?></td>
				
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $tut[0] ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>