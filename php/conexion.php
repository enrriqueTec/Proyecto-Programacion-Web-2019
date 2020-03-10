<?php


function conexion(){
$host="localhost";
$user="root";
$password="";
$db="tutorias";

			$conexion= new PDO('mysql:host='.$host.'; dbname='.$db, $user, $password);

			return $conexion;
		}


?>