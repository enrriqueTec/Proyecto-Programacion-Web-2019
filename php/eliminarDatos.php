
<?php 
session_start();
if($_SESSION["autenticado"]!=1){
     header("Location: login.php");

 }
	require_once "conexion.php";
	$conexion=conexion();
	$NumeroControl=$_POST['NumeroControl'];

	$sql="DELETE from alumnos where numControl='$NumeroControl'";
	echo $result=mysqli_query($conexion,$sql);
 ?>