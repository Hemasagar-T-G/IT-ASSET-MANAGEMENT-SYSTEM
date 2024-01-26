<?php
// Include connection file 
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "my_suit";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
include_once('pdfgen\fpdf.php');

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->SetFont('Times', 'B', 14);
        $this->Cell(0, 10, 'IT ASSET MANAGEMENT SYSTEM', 0, 0, 'C');
        $this->Ln(15);
        $this->Cell(0, 10, 'ASSET REQUEST REPORT', 0, 0, 'C');
        $this->Ln(15);
    }

    // Page footer
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('times', 'I', 8);
        $this->Cell(0, 10, '[ 0: REQUESTED, 1: APPROVED, -1: REJECTED ]', 0, 0, 'C');
        $this->Ln(5);
        $this->Cell(0, 10, 'IT ASSET MANAGEMENT SYSTEM - PAGE ' . $this->PageNo(), 0, 0, 'C');
    }
}

$result = mysqli_query($conn, "SELECT * FROM tbl_request ") or die("database error:" . mysqli_error($conn));

$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Times', 'B', 12);
$pdf->SetFillColor(173, 216, 230); // Blue background color

$display_heading = array('requestId' => 'REQUEST ID', 'assetId' => 'ASSET ID', 'requestItem' => 'ITEM', 'requestQty' => 'QUANTITY', 'requestReason' => 'REASON', 'Status' => 'STATUS');

// Header row
$pdf->SetFillColor(135, 206, 235); // Lighter blue background color for header row
foreach ($display_heading as $heading) {
    $pdf->Cell(32, 10, $heading, 1, 0, 'C', true);
}

// Data rows
$pdf->SetFont('Times', '', 10);
foreach ($result as $row) {
    $pdf->Ln();
    foreach ($row as $column)
        $pdf->Cell(32, 10, $column, 1, 0, 'C'); // Aligning content to center
}

$pdf->Output();
?>
