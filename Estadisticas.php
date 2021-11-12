

<?php
// include class
require('fpdf/fpdf.php');

require_once'./Conexiones/conexion.php';

$sql = "SELECT SUM(total) AS Total, NombreRuta, Fecha FROM detalleventas  WHERE NombreRuta = NombreRuta GROUP BY NombreRuta";
$stmt = $pdo->prepare($sql);

$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();

$registros=$stmt->fetchAll();

// create document
$pdf = new FPDF();
$pdf->AddPage();

// add text
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Generar archivos PDF con PHP', 0, 1);
$pdf->Ln();
$Tabla = ['Id_Usuarios'  , 'Cantidad' , 'Precio' , 'Total', 'Tipo' , 'Fecha'];

$TablaDV =[ 'Nombre Ruta'  , 'Total' , 'Fecha'];

	 
foreach ($TablaDV as $value) {
	 $pdf->Cell(65.1,10,utf8_decode($value),1,0,'C',0);
}
	$pdf->Ln();
// foreach ($TablaDV as $value) {
// 	 $pdf->Cell(25.1,10,utf8_decode($value),1,0,'C',0);
// }
//  $pdf->Cell(48,10,utf8_decode('Ruta'),1,0,'C',0);
// $pdf->Ln();

// foreach($registros as $value){
	 
// 	 $pdf->Cell(25.1,10,utf8_decode($value['Id_Usuarios']),1,0,'C',0);	
// 	 $pdf->Cell(25.1,10,utf8_decode($value['Cantidad']),1,0,'C',0);	
// 	 $pdf->Cell(25.1,10,utf8_decode($value['Precio']),1,0,'C',0);	
// 	 $pdf->Cell(25.1,10,utf8_decode($value['Total']),1,0,'C',0);	
// 	 $pdf->Cell(25.1,10,utf8_decode($value['Tipo']),1,0,'C',0);	
// 	 $pdf->Cell(25.1,10,utf8_decode($value['Fecha']),1,0,'C',0);	
// 	 $pdf->Cell(48,10,utf8_decode($value['NombreRuta']),1,0,'C',0);	
// 	 $pdf->Ln();
	 
// }


foreach($registros as $value){
	 $pdf->Cell(65.1,10,utf8_decode($value['NombreRuta']),1,0,'C',0);	
	 $pdf->Cell(65.1,10,utf8_decode($value['Total']),1,0,'C',0);	
	 $pdf->Cell(65.1,10,utf8_decode($value['Fecha']),1,0,'C',0);	
	 
	 
	
	 $pdf->Ln();
	 
}




// output file
$pdf->Output('', 'Reportes.pdf');