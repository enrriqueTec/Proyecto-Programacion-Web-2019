<?php 

	include"conexion.php";
	$conexion=new conexion();
	$clave=htmlspecialchars($_POST['txt_Clave_Tutor']);
	$nombre=htmlspecialchars($_POST['txt_Nombre_Tutor']);
	$primerAp=htmlspecialchars($_POST['txt_Apellido_Paterno_Tutor']);
	$segundoAp=htmlspecialchars($_POST['txt_Apellido_Materno_Tutor']);
	$grado=htmlspecialchars($_POST['txt_Grado_Tutor']);
	$num=htmlspecialchars($_POST['txt_Telefono_Tutor']);
	
	echo "Dentro de agregar";

	$sql="INSERT INTO tutores(clave_tutor,nombreTutor,primerApTutor.segundoApTutor,gradoAcademico,telefono)values('$clave','$nombre','$primerAp','$segundoAp','$grado',$num)";

	echo $tutores=mysqli_query($conexion,$sql);

 ?>