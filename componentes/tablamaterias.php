<?php 
	session_start();
	
	require_once "../php/conexion.php";

	$conexion=conexion();

 ?>
<div class="row">
    <div class="col-sm-12">
        <center>
            <h2>Tutores</h2>
        </center>
        <caption>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevoTutor">
                Agregar Tutores
                <span class="glyphicon glyphicon-plus"></span>
            </button>
        </caption>
        <div class="table-responsive">
            <table class="table table-hover table-condensed table-bordered table-ligth table-striped-dark">

                <tr class="bg-primary">
                    <td>Clave</td>
                    <td>Nombre</td>
                    <td>Apellido Paterno</td>
                    <td>Apellido Materno</td>
                    <td>Grado Académico</td>
                    <td>Teléfono</td>
                    
                   
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>

                <?php 
if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
$sql="SELECT * from tutores where clave_tutor='$idp'";
}else{
						$sql="SELECT * from tutores";
					}
				}else{
					$sql="SELECT * from tutores";
				}
					
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5];
			 ?>

                <tr>
                    <td><?php echo $ver[0] ?></td>
                    <td><?php echo $ver[1] ?></td>
                    <td><?php echo $ver[2] ?></td>
                    <td><?php echo $ver[3] ?></td>
                    <td><?php echo $ver[4] ?></td>
                    <td><?php echo $ver[5] ?></td>
                    
                   
                    <td>
                        <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicionTutores" onclick="agregaformTutores('<?php echo $datos ?>')">

                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNoTutor('<?php echo $ver[0] ?>')">

                        </button>
                    </td>
                </tr>
                <?php 
		}
			 ?>
            </table>
        </div>

    </div>
</div>