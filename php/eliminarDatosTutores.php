<?php 
	require_once "conexion.php";
	$conexion=conexion();
	clave=$_POST['clave_tutor'];

	$sql="DELETE from tutores where clave_tutor='$clave'";
	echo $result=mysqli_query($conexion,$sql);
 ?>