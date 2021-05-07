 <?php
include "../Model/Fournisseur.php";
include "../Controller/FournisseurC.php";
require ("fpdf.php");



$omaima=new FournisseurC();
$tab=$omaima-> afficherFournisseur();
$pdf=new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(60,5,'Liste des reclamation pour les fournisseurs',0,1);
      $pdf->Cell(130,5,' ',0,1);
      $pdf->SetFont('Arial','B',14);


       $pdf->Cell(50,5,"id",1,0);
        $pdf->Cell(50,5,"nom",1,0);
        $pdf->Cell(50,5,"numero",1,0);
        $pdf->Cell(50,5,"adresse",1,1);
 foreach($tab as $row)
    {
        $pdf->Cell(50,5,$row["id"],1,0);
        $pdf->Cell(50,5,$row["nom"],1,0);
        $pdf->Cell(50,5,$row["numero"],1,0);
        $pdf->Cell(50,5,$row["adresse"],1,1);

    }




 $dest = 'Fournisseur.pdf';
 $pdf->Output('F', $dest);
 header("location:affichage.php");


?>
