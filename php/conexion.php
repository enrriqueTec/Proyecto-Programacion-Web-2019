<?php
session_start();
if($_SESSION["autenticado"]!=1){
     header("Location: login.php");

 }
$host="localhost";
$user="root";
$password="";
$db="bd_control_trayectoria";
$con = new mysqli($host,$user,$password,$db);



function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="";
			$bd="bd_control_trayectoria";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}


?>