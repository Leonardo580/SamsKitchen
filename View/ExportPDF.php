<?php
require('fpdf.php');
include "../Controller/UsersC.php";
$uc=new UsersC();
$list=$uc->afficherusers();
/*$pdf = new FPDF();
$pdf->SetTitle("Users");
$pdf->AddPage();
//$pdf->Image('logo.jpg',10,6,30);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,10,'CIN',1,0,'C');
$pdf->Cell(40,10,'FullName',1,0,'C');
$pdf->Cell(40,10,'Age',1,0,'C');
$pdf->Cell(40,10,'Email',1,0,'C');
$pdf->Cell(40,10,'Password',1,0,'C');
$pdf->Ln();
$pdf->SetFont('Arial','',10);
foreach ($list as $l){
    $pdf->Cell(40,10,$l['CIN'],'LR');
    $pdf->Cell(40,10,$l['FullName'],'LR');
    $pdf->Cell(40,10,$l['Age'],'LR');
    $pdf->Cell(40,10,$l['Email'],'LR');
    $pdf->Cell(40,10,$l['Password'],'LR');
    $pdf->Ln();
}
$pdf->Output();*/

class PDF extends FPDF
{
// Page header
    function Header()
    {
        // Logo
        $this->Image('logo.jpg',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30,10,'UsersDB',1,0,'C');
        // Line break
        $this->Ln(20);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    function FancyTable($header, $data)
    {
        // Colors, line width and bold font
        $this->SetFillColor(255,0,0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128,0,0);
        $this->SetLineWidth(.3);
        $this->SetFont('','B');
        // Header
        $w = array(20, 35, 20, 45, 50);
        for($i=0;$i<count($header);$i++)
            $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(224,235,255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Data
        $fill = false;
        foreach($data as $row)
        {
            $this->Cell($w[0],6,$row['CIN'],'LR',0,'L',$fill);
            $this->Cell($w[1],6,$row['FullName'],'LR',0,'L',$fill);
            $this->Cell($w[2],6,$row['Age'],'LR',0,'L',$fill);
            $this->Cell($w[3],6,$row['Email'],'LR',0,'L',$fill);
            $this->Cell($w[4],6,$row['Password'],'LR',0,'L',$fill);
            $this->Ln();
            $fill = !$fill;
        }
        // Closing line
        $this->Cell(array_sum($w),0,'','T');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$header=array("Id","Full Name","Age", "Email", "Password");
$pdf->FancyTable($header,$list);
$pdf->Output();

?>