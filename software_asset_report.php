<?php
require('pdfgen/fpdf.php');

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'my_suit';

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$query = "SELECT assetId, assetName, assetQty FROM tbl_software";
$result = $connection->query($query);

class PDF extends FPDF {
    function Header() {
        $this->SetFont('Times', 'B', 16);
        $this->Cell(0, 10, 'IT ASSET MANAGEMENT SYSTEM', 0, 1, 'C');
        
        $this->SetFont('Times', 'B', 14);
        $this->Cell(0, 10, 'SOFTWARE ASSET REPORT', 0, 1, 'C');
        $this->Ln(10);
    }
    
    function Footer() {
        $this->SetY(-15); // Move to the bottom
        $this->SetFont('Times', 'B', 8);
        $this->SetXY(0, -15); // Move to the center horizontally
        $this->Cell(0, 10, 'IT ASSET MANAGEMENT SYSTEM - PAGE ' . $this->PageNo(), 0, 0, 'C');
    } 
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetLeftMargin($pdf->GetPageWidth() * 0.2);

// Set table header cell colors and styles
$pdf->SetFillColor(200, 220, 255); // Light blue background color
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(30, 10, 'Asset ID', 1, 0, 'C', true); // Apply background color
$pdf->Cell(60, 10, 'Asset Name', 1, 0, 'C', true); // Apply background color
$pdf->Cell(40, 10, 'Quantity', 1, 1, 'C', true); // Apply background color

// Set table row font and style
$pdf->SetFont('Times', '', 12);
while ($row = $result->fetch_assoc()) {
    $pdf->Cell(30, 10, $row['assetId'], 1, 0, 'C');
    $pdf->Cell(60, 10, $row['assetName'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['assetQty'], 1, 1, 'C');
}

$pdf->Output();
$connection->close();
?>
