<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$clave=$_POST['txt_clave_tutor'];
	$nombre=$_POST['txt_Nombre_tutor'];
	$primerAp=$_POST['txt_primerAp_tutor'];
	$segundoAp=$_POST['txt_segundoAp_tutor'];
	$grado=$_POST['txt_gradoAcademico'];
	$num=$_POST['txt_numero_tutor'];
	
	

	$sql="INSERT INTO tutores(clave_tutor,nombreTutor,primerApTutor,segundoApTutor,gradoAcademico,telefono) values ('$clave','$nombre','$primerAp','$segundoAp','$grado','$num')";
	echo $tutores=mysqli_query($conexion,$sql);

 ?>