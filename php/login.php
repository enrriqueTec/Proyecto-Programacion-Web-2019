<?php
session_start();
if(!empty($_POST)){
  
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			$conexion=conexion();
			$user_id=null;
			$sql1="SELECT * FROM login where NombreUsuario=\"$_POST[username]\"  and Contrasena=\"$_POST[password]\" ";
			$query =mysqli_query($conexion,$sql1);
            
			while ($ver=mysqli_fetch_row($query)) {
				$user_id=$ver[0];
                              
				break;
                
			}
            //var_dump($sql1);
			if($user_id==null){
                $_SESSION["autenticado"]=0;
				print "<script>alert(\"Acceso invalido.\"); window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["autenticado"]=1;
				print "<script>window.location='../home.php';</script>";				
			}
		}
	}
}



?>