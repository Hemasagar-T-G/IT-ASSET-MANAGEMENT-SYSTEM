<?php
include_once('pdf_generate/pdfgen/fpdf.php'); // Include FPDF library

// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'my_suit';

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->SetFont('Times', 'B', 14);
        $this->Cell(0, 10, 'IT ASSET MANAGEMENT SYSTEM', 0, 0, 'C');
        $this->Ln(15);
        $this->Cell(0, 10, 'MANAGER DASHBOARD REPORT', 0, 0, 'C');
        $this->Ln(15);
    }

    // Page footer
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('times', 'I', 8);
        $this->Ln(5);
        $this->Cell(0, 10, 'IT ASSET MANAGEMENT SYSTEM - PAGE ' . $this->PageNo(), 0, 0, 'C');
    }
}

// Create a new PDF instance
$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Times', 'B', 12);

// Set the left margin as 10% of the page width
$leftMargin = $pdf->GetPageWidth() * 0.12;
$pdf->SetLeftMargin($leftMargin);
// Database connection
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve and display data for each section
$sections = array(
    "TOTAL REQUEST"
);
$sections1 = array(
    "NEW REQUEST"
);
$sections2 = array(
    "APPROVED REQUEST"
);
$sections3 = array(
    "REJECTED REQUEST"
);
$display_heading = array('itemName' => 'NAME', 'asset' => 'COUNT');
$pdf->SetFillColor(135, 206, 235); // Lighter blue background color for header row
foreach ($display_heading as $heading) {
    $pdf->Cell(80, 10, $heading, 1, 0, 'C', true);
  
}  $pdf->Ln();
foreach ($sections as $section) {
    $sql = "SELECT * FROM tbl_request WHERE 1"; // Modify the SQL query as needed
    if ($result = mysqli_query($conn, $sql)) {
        $rowcount = mysqli_num_rows($result);

        // Display result
        $pdf->SetFont('Times', '', 12);
    $pdf->Cell(80, 10, $section, 1, 0, 'C');
    $pdf->Cell(80, 10, "" . $rowcount, 1, 0, 'C');
    $pdf->Ln();
    }}

    foreach ($sections2 as $section2) {
        $sql2 = "SELECT * FROM `tbl_request` WHERE Status=1;"; // Modify the SQL query as needed
        if ($result2 = mysqli_query($conn, $sql2)) {
            $rowcount2 = mysqli_num_rows($result2);
    
            // Display result
            $pdf->SetFont('Times', '', 12);
            $pdf->Cell(80, 10, $section2, 1, 0, 'C');
            $pdf->SetFont('Times', '', 12);
            $pdf->Cell(80, 10, "" . $rowcount2, 1, 0, 'C');
            $pdf->Ln();
        }}

        foreach ($sections3 as $section3) {
            $sql3 = "SELECT * FROM `tbl_request` WHERE Status=-1;"; // Modify the SQL query as needed
            if ($result3 = mysqli_query($conn, $sql3)) {
                $rowcount3 = mysqli_num_rows($result3);
        
                // Display result
                $pdf->SetFont('Times', '', 12);
                $pdf->Cell(80, 10, $section3, 1, 0, 'C');
                $pdf->SetFont('Times', '', 12);
                $pdf->Cell(80, 10, "" . $rowcount3, 1, 0, 'C');
                $pdf->Ln();
            }}

    foreach ($sections1 as $section1) { 
    $sql1 = "SELECT * FROM `tbl_request` WHERE Status=0;"; // Modify the SQL query as needed
    if ($result1 = mysqli_query($conn, $sql1)) {
        $rowcount1 = mysqli_num_rows($result1);

        // Display result
        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(80, 10, $section1, 1, 0, 'C');
        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(80, 10, "" . $rowcount1, 1, 0, 'C');
        $pdf->Ln();
    }
}

// Close the database connection
mysqli_close($conn);

// Output PDF
$pdf->Output();
?>
