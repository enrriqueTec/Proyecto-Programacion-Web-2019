<?
if(isset($_POST['create_pdf'])){
	require_once('tcpdf/tcpdf.php');
	
	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Miguel Caro');
	$pdf->SetTitle($_POST['reporte_name']);
	$pdf->setPrintHeader(false); 
	$pdf->setPrintFooter(false);
	$pdf->SetMargins(20, 20, 20, false); 
	$pdf->SetAutoPageBreak(true, 20); 
	$pdf->SetFont('Helvetica', '', 10);
	$pdf->addPage();

	$content = '';
	
	$content .= '
		<div class="row">
        	<div class="col-md-12">
            	<h1 style="text-align:center;">'.$_POST['reporte_name'].'</h1>
       	
      <table border="1" cellpadding="5">
        <thead>
          <tr>
            <th>DNI</th>
            <th>A. PATERNO</th>
            <th>A. MATERNO</th>
            <th>NOMBRES</th>
            <th>AREA</th>
            <th>SUELDO</th>
          </tr>
        </thead>
	';
	
	
	while ($user=$usuarios->fetch_assoc()) { 
			if($user['activo']=='A'){  $color= '#f5f5f5'; }else{ $color= '#fbb2b2'; }
	$content .= '
		<tr bgcolor="'.$color.'">
            <td>'.$user['dni'].'</td>
            <td>'.$user['paterno'].'</td>
            <td>'.$user['materno'].'</td>
            <td>'.$user['nombres'].'</td>
            <td>'.$user['area'].'</td>
            <td>S/. '.$user['sueldo'].'</td>
        </tr>
	';
	}
	
	$content .= '</table>';
	
	$content .= '
		<div class="row padding">
        	<div class="col-md-12" style="text-align:center;">
            	<span>Pdf Creator </span><a href="http://www.redecodifica.com">By Miguel Angel</a>
            </div>
        </div>
    	
	';
	
	$pdf->writeHTML($content, true, 0, true, 0);

	$pdf->lastPage();
	$pdf->output('Reporte.pdf', 'I');
}