<?php
        // put your code here
       
require 'fpdf.php';
$pdf = new FPDF('L', 'mm', array(100, 150));
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello, World!');

// add ob_get_clean(); before $pdf->OutPut() if it's necesary
$pdf->Output();

?>
