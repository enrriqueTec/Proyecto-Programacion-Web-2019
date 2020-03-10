<?php
session_start();
if(!empty($_POST)){
  $user=$_POST["username"];
  $password=$_POST["password"];
	if(isset($user) &&isset($password)){
		if($user!=""&&$password!=""){
			include "conexion.php";
			$conexion=conexion();
			$user_id=null;
			$sql1="SELECT * FROM login where NombreUsuario=?  and Contrasena=? ";
			$stm=$conexion->prepare($sql1);

		
          $stm->bindValue(1,$user);	
          $stm->bindValue(2,$password);
          					
	     echo $result=$stm->execute();
            

			while ($ver=$stm->fetch()) {
				$user_id=$ver[0];
                              
				break;
                
			}
            //var_dump($sql1);
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\"); window.location='../login.php';</script>";
			}else{
				$_SESSION["autenticado"]=1;
				print "<script>window.location='../Altas.php';</script>";				
			}
		}
	}
}



?>