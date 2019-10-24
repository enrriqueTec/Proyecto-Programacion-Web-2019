<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$nc=$_POST['txt_Num_Control_Modificaciones'];
	$n=$_POST['txt_Nombre_Modificaciones'];
	$ap=$_POST['txt_Apellido_Paterno_Modificaciones'];
	$am=$_POST['txt_Apellido_Materno_Modificaciones'];
	$e=$_POST['txt_Edad_Modificaciones'];
	$s=$_POST['txt_Semestre_Modificaciones'];
	$c=$_POST['txt_Carrera_Modificaciones'];

	$sql="UPDATE alumnos set Nombre='$n', primerAp='$ap', segundoAp='$am', edad='$e', semestre='$s', carrera='$c' where numControl='$nc'";
	echo $result=mysqli_query($conexion,$sql);

 ?>