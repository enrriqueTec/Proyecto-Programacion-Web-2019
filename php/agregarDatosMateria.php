<?php 

	require_once "conexion.php";
	$conexion=conexion();

	$clave=htmlspecialchars($_POST['txt_Clave_Tutor']);
	$nombre=htmlspecialchars($_POST['txt_Nombre_Tutor']);
	$primerAp=htmlspecialchars($_POST['txt_Apellido_Paterno_Tutor']);
	$segundoAp=htmlspecialchars($_POST['txt_Apellido_Materno_Tutor']);
	$grado=htmlspecialchars($_POST['txt_Grado_Tutor']);
	$telefono=htmlspecialchars($_POST['txt_Telefono_Tutor']);

	$sql="INSERT INTO tutores
    (clave_tutor,nombreTutor,primerApTutor,segundoApTutor,gradoAcademico,telefono)
    values('$clave','$nombre','$primerAp','$segundoAp','$grado','$telefono')";



	echo $result=mysqli_query($conexion,$sql);


 ?>