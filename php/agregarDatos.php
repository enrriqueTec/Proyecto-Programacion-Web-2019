<?php 
session_start();
if($_SESSION["autenticado"]!=1){
     header("Location: login.php");

 }
	include"conexion.php";
	$conexion=conexion();
	$nc=htmlspecialchars($_POST['txt_Num_Control']);
	$n=htmlspecialchars($_POST['txt_Nombre']);
	$ap=htmlspecialchars($_POST['txt_Apellido_Paterno']);
	$am=htmlspecialchars($_POST['txt_Apellido_Materno']);
	$e=htmlspecialchars($_POST['txt_Edad']);
	$s=htmlspecialchars($_POST['txt_Semestre']);
	$c=htmlspecialchars($_POST['txt_Carrera']);
	$t=htmlspecialchars($_POST['txt_tutor']);

  echo "Dentro de agregar";
        $sql="INSERT INTO alumnos (numControl,Nombre,primerAp,segundoAp,edad,semestre,carrera,clave_tutor)
								values (?,?,?,?,?,?,?,?)";
		$stm=$conexion->prepare($sql);
          $stm->bindValue(1,$nc);	
          $stm->bindValue(2,$n);
          $stm->bindValue(3,$ap);
          $stm->bindValue(4,$am);
          $stm->bindValue(5,$e);
          $stm->bindValue(6,$s);
          $stm->bindValue(7,$c);
           $stm->bindValue(8,$t);					
	echo $result=$stm->execute();
        
    

	

 ?>