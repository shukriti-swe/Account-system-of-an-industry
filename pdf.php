<?php
if (isset($_POST['submit'])) {

    $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $phonenumber = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
    // $address=$_POST['address'];

}
require "fpdf17/fpdf.php";
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->Addpage();
$pdf->SetFont('Arial', 'B', 16);

$pdf->Cell(130, 5, 'Garments ERP', 0, 0);
$pdf->Cell(59, 5, 'INVOICE', 0, 1); //end of line

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(130, 5, 'Street: 12/B', 0, 0);
$pdf->Cell(59, 5, '', 0, 1); //end of line

$pdf->Cell(130, 5, 'Dhaka, Bangladesh, 1207', 0, 0);
$pdf->Cell(25, 5, "Date: ", 0, 0);
$pdf->Cell(34, 5, "{$date}", 0, 1); //end of line //date var

$pdf->Cell(130, 5, 'Phone: +088 01770000000', 0, 0);
$pdf->Cell(25, 5, 'Invoice #', 0, 0);
$pdf->Cell(34, 5, '[1234567]', 0, 1); //end of line

$pdf->Cell(130, 5, 'Fax: +12345678', 0, 0);
// $pdf->Cell(25    ,5,'Customer ID',0,0);
//$pdf->Cell(34    ,5,'[1234567]',0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189, 10, '', 0, 1); //end of line

//billing address
$pdf->Cell(100, 5, 'Bill to', 0, 1); //end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, "Name: {$name}", 0, 1);

$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, "Company Name: ", 0, 1);

$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, "Adress:{$address} ", 0, 1);

$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, "Mobile:{$phonenumber} ", 0, 1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189, 10, '', 0, 1); //end of line

//invoice contents
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(130, 5, 'Description', 1, 0);
$pdf->Cell(25, 5, 'Taxable', 1, 0); //no need
$pdf->Cell(34, 5, 'Amount', 1, 1); //end of line

$pdf->SetFont('Arial', '', 14);

//Numbers are right-aligned so we give 'R' after new line parameter

$pdf->Cell(130, 5, 'UltraCool Fridge', 1, 0);
$pdf->Cell(25, 5, '-', 1, 0); //no need
$pdf->Cell(34, 5, '3,250', 1, 1, 'R'); //end of line

$pdf->Cell(130, 5, 'Supaclean Diswasher', 1, 0);
$pdf->Cell(25, 5, '-', 1, 0); //no need
$pdf->Cell(34, 5, '1,200', 1, 1, 'R'); //end of line

$pdf->Cell(130, 5, 'Something Else', 1, 0);
$pdf->Cell(25, 5, '-', 1, 0); //no need
$pdf->Cell(34, 5, '1,000', 1, 1, 'R'); //end of line

//summary
$pdf->Cell(130, 5, '', 0, 0);
$pdf->Cell(25, 5, 'Total', 1, 0);
$pdf->Cell(4, 5, 'tk', 1, 0);
$pdf->Cell(30, 5, '4,450', 1, 1, 'R'); //end of line

// $pdf->Cell(130    ,5,'',0,0);
// $pdf->Cell(25    ,5,'Tax Rate',0,0);
// $pdf->Cell(4    ,5,'$',1,0);
// $pdf->Cell(30    ,5,'10%',1,1,'R');//end of line

// $pdf->Cell(130    ,5,'',0,0);
// $pdf->Cell(25    ,5,'Total Due',0,0);
// $pdf->Cell(4    ,5,'$',1,0);
// $pdf->Cell(30    ,5,'4,450',1,1,'R');//end of line

// $pdf->Cell(50,10,"Name:",1,0);
// $pdf->Cell(140,10,"{$name}",1,1);

// $pdf->Cell(50,10,"ID:",1,0);
// $pdf->Cell(140,10,"{$id}",1,1);

// $pdf->Cell(50,10,"Email:",1,0);
// $pdf->Cell(140,10,"{$email}",1,1);

// $pdf->Cell(50,10,"Phonenumber:",1,0);
// $pdf->Cell(140,10,"{$phonenumber}",1,1);

// $pdf->Cell(50,10,"Address:",1,0);
// $pdf->Cell(140,10,"{$address}",1,1);

$pdf->output();
