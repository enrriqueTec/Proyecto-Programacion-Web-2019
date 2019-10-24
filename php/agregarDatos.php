<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$nc=$_POST['txt_Num_Control'];
	$n=$_POST['txt_Nombre'];
	$ap=$_POST['txt_Apellido_Paterno'];
	$am=$_POST['txt_Apellido_Materno'];
	$e=$_POST['txt_Edad'];
	$s=$_POST['txt_Semestre'];
	$c=$_POST['txt_Carrera'];

    $comp="SELECT * FROM alumnos where numControl=".$nc;
  
        $sql="INSERT INTO alumnos (numControl,Nombre,primerAp,segundoAp,edad,semestre,carrera)
								values ('$nc','$n','$ap','$am','$e','$s','$c')";
	echo $result=mysqli_query($conexion,$sql);
        
    

	

 ?>