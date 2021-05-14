<?php
include "../Model/plat.php";
include "../Controller/platC.php";
require ("fpdf.php");



$omaima=new platC();
$tab=$omaima->afficherplat();
$pdf=new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(60,5,'liste des plats',0,1);
      $pdf->Cell(130,5,' ',0,1);
      $pdf->SetFont('Arial','B',14);


       $pdf->Cell(20,5,"code",1,0);
        $pdf->Cell(20,5,"nomplat",1,0);
        $pdf->Cell(30,5,"recette",1,0);
        $pdf->Cell(30,5,"ingrediants",1,0);
        $pdf->Cell(20,5,"prix",1,0);
    
 foreach($tab as $row)
    {
        $pdf->Cell(20,5,$row["code"],1,0);
        $pdf->Cell(20,5,$row["nomplat"],1,0);
        $pdf->Cell(30,5,$row["recette"],1,0);
        $pdf->Cell(30,5,$row["ingrediants"],1,0);
        $pdf->Cell(20,5,$row["prix"],1,0);
  


    }




 $dest = 'plat.pdf';
 $pdf->Output('F', $dest);
 header("location:affichageplat.php");


?>
