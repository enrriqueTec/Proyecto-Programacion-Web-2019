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
	$grado=htmlspecialchars($_POST['txt_Grado_Modificaciones']);
	$telefono=htmlspecialchars($_POST['txt_Telefono_Modificaciones']);
	



	$sql="UPDATE tutores set nombreTutor=?, primerApTutor=?, segundoApTutor=?, gradoAcademico=?, telefono=? where clave_tutor=?";
	$stm=$conexion->prepare($sql);
          $stm->bindValue(1,$nombre);	
          $stm->bindValue(2,$primerAp);
          $stm->bindValue(3,$segundoAp);
          $stm->bindValue(4,$grado);
          $stm->bindValue(5,$telefono);
          $stm->bindValue(6,$clave);
        					
	echo $result=$stm->execute();

 ?>