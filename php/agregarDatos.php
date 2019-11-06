<?php 

	include"conexion.php";
	$conexion=conexion();
	$nc=htmlspecialchars($_POST['txt_Num_Control']);
	$n=htmlspecialchars($_POST['txt_Nombre']);
	$ap=htmlspecialchars($_POST['txt_Apellido_Paterno']);
	$am=htmlspecialchars($_POST['txt_Apellido_Materno']);
	$e=htmlspecialchars($_POST['txt_Edad']);
	$s=htmlspecialchars($_POST['txt_Semestre']);
	$c=htmlspecialchars($_POST['txt_Carrera']);

  echo "Dentro de agregar";
        $sql="INSERT INTO alumnos (numControl,Nombre,primerAp,segundoAp,edad,semestre,carrera)
								values ('$nc','$n','$ap','$am','$e','$s','$c')";
	echo $result=mysqli_query($conexion,$sql);
        
    

	

 ?>