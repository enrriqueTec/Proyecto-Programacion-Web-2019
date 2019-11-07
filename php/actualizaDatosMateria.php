<?php 
session_start();
if($_SESSION["autenticado"]!=1){
     header("Location: login.php");

 }
	require_once "conexion.php";
	$conexion=conexion();
	$clave=htmlspecialchars($_POST['txt_Clave_Modificaciones']);
	$nombre=htmlspecialchars($_POST['txt_Nombre_Modificaciones']);
	$primerAp=htmlspecialchars($_POST['txt_Apellido_Paterno_Modificaciones']);
	$segundoAp=htmlspecialchars($_POST['txt_Apellido_Materno_Modificaciones']);
	$grado=$_POST['txt_Grado_Modificaciones'];
	$telefono=htmlspecialchars($_POST['txt_Telefono_Modificaciones']);
	

	$sql="UPDATE tutores set nombreTutor='$nombre', primerApTutor='$primerAp', segundoApTutor='$segundoAp', gradoAcademico='$grado', telefono='$telefono' where clave_tutor='$clave'";
	echo $result=mysqli_query($conexion,$sql);

 ?>