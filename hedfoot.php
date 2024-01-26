<?php
require_once('genpdf/fpdf.php');

// Extend FPDF class to create custom header and footer
class MyPDF extends FPDF {
    function Header() {
        // Header content
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Header Text', 0, 0, 'C');
        $this->Ln(10); // Move down
    }

    function Footer() {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Footer content
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// Create new PDF instance
$pdf = new MyPDF();

// Add a page
$pdf->AddPage();

// Set border
$pdf->SetLineWidth(0.5);
$pdf->Rect(10, 30, 190, 250);

// Add content
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'PDF Content goes here...', 0, 1, 'C');

// Output the PDF
$pdf->Output();
?>
