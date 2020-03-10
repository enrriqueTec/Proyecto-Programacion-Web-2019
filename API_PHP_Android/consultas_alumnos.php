<?php

if($conexion=mysqli_connect('localhost:3306','root','','bd_control_trayectoria')){

	if($_SERVER['REQUEST_METHOD']=='POST'){

			$cadena_JSON=file_get_contents('php://input');
			$datos=json_decode($cadena_JSON, true);
            $nc = $datos['nc'];
			$sql="SELECT * FROM alumnos WHERE numContro= '$nc'";
			$res=mysqli_query($conexion,$sql);
			$datos['alumnos']=array();
			while ($fila=mysqli_fetch_assoc($res)) {
				$alumno=array();
				$alumno['nc']=$fila['numControl'];
				$alumno['n']=$fila['Nombre'];
				$alumno['pa']=$fila['primerAp'];
				$alumno['sa']=$fila['segundoAp'];
				$alumno['e']=$fila['edad'];
				$alumno['s']=$fila['semestre'];
				$alumno['c']=$fila['carrera'];

				array_push($datos['alumnos']);
			}

			echo json_encode($datos);

			

	}

}else{
	die("Error de conexion".mysqli_connect_error());
}

?>