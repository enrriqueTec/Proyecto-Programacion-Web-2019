<?php 
	session_start();
	
	require_once "../php/conexion.php";

	$conexion=conexion();

 ?>
<div class="row">
    <div class="col-sm-12">
        <center>
            <h2>Alumnos</h2>
        </center>
        <caption>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                Agregar alumnos
                <span class="glyphicon glyphicon-plus"></span>
            </button>
        </caption>
        <div class="table-responsive">
            <table class="table table-hover table-condensed table-bordered table-ligth table-striped-dark">

                <tr class="bg-primary">
                    <td>No. Control</td>
                    <td>Nombre</td>
                    <td>Apellido Paterno</td>
                    <td>Apellido Materno</td>
                    <td>Edad</td>
                    <td>Semestre</td>
                    <td>Carrera</td>
                    <td>Tutor</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>

                <?php 
              if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){

						$idp=$_SESSION['consulta'];
                        $stm=$conexion->prepare("SELECT * from alumnos where numControl=?");
                        $stm->bindValue(1,$idp);
                        
                    }else{
						$sql="SELECT * from alumnos";
                         $stm=$conexion->prepare($sql);
                       
					}
				    }else{
					$sql="SELECT * from alumnos";
                     $stm=$conexion->prepare($sql);
                        
				}
					$result=$conexion->query($sql);
                    $stm->execute();
				while ($ver=$stm->fetch()){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
                           $ver[6]."||".
                           $ver[7];
			 ?>

                <tr>
                    <td><?php echo $ver[0] ?></td>
                    <td><?php echo $ver[1] ?></td>
                    <td><?php echo $ver[2] ?></td>
                    <td><?php echo $ver[3] ?></td>
                    <td><?php echo $ver[4] ?></td>
                    <td><?php echo $ver[5] ?></td>
                    <td><?php echo $ver[6] ?></td>
                    <td><?php echo $ver[7] ?></td>
                   
                    <td>
                        <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">

                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $ver[0]?>');">

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
