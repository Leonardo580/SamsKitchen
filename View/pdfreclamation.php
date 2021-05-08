

<?php
include "../Model/Livreur.php";
include "../Controller/LivreurC.php";
require ("fpdf.php");



$omaima=new LivreurC();
$tab=$omaima-> afficherLivreur();
$pdf=new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(60,5,'Liste des livreurs',0,1);
      $pdf->Cell(130,5,' ',0,1);
      $pdf->SetFont('Arial','B',14);


       $pdf->Cell(50,5,"IdLivr",1,0);
        $pdf->Cell(50,5,"nomL",1,0);
        $pdf->Cell(50,5,"prenomL",1,0);
        $pdf->Cell(50,5,"tel",1,1); 
 foreach($tab as $row)
    {
        $pdf->Cell(50,5,$row["IdLivr"],1,0);
        $pdf->Cell(50,5,$row["nomL"],1,0);
        $pdf->Cell(50,5,$row["prenomL"],1,0);
        $pdf->Cell(50,5,$row["tel"],1,1);

    }




 $dest = 'Livreurs.pdf';
 $pdf->Output('F', $dest);
 header("location:affichageLiv.php");


?>
