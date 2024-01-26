<?php
require('pdf_generate/pdfgen/fpdf.php'); // Include FPDF library

if (isset($_POST['generate_pdf'])) {
    // Create a new instance of FPDF
    $pdf = new FPDF();
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('Arial', 'B', 16);

    // Add content to PDF
    ob_start(); // Start output buffering
    include 'dash.php'; // Include the content of your main div
    $content = ob_get_clean(); // Get the buffered content
    $pdf->MultiCell(0, 10, $content);

    // Output the PDF for download
    $pdf->Output('generated_pdf.pdf', 'D');
}

// ... (Your existing HTML and PHP code)
?>

<!-- Add a form to trigger PDF generation -->
<form method="post">
    <button type="submit" name="generate_pdf">Generate PDF</button>
</form>
