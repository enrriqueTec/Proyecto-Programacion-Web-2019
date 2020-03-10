<?php 
session_start();
if($_SESSION["autenticado"]!=1){
     header("Location: login.php");

 }
	require_once "conexion.php";
	$conexion=conexion();
	$clave=$_POST['clave_tutor'];

	$sql="DELETE from tutores where clave_tutor=?";
	$stm=$conexion->prepare($sql);
    $stm->bindValue(1,$clave);	
         					
	echo $result=$stm->execute();
 ?>