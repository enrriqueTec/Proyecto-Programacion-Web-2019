<?php 
//INCLUDE TCPDF
	include('tcpdf/tcpdf.php');

//CREAR OBJETO TCPDF

    $pdf=new TCPDF('P','mm','A4');
//AGREGAR PÁGINA
    $pdf->AddPage();    
//CONTENIDO

//SALIDA


	$pdf->Output();


?>

