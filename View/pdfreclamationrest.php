 <?php
include "../Model/restaurant.php";
include "../Controller/restaurantC.php";
require ("fpdf.php");



$omaima=new restaurantC();
$tab=$omaima->afficherrestaurant();
$pdf=new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(60,5,'liste des restaurants',0,1);
      $pdf->Cell(130,5,' ',0,1);
      $pdf->SetFont('Arial','B',14);


       $pdf->Cell(20,5,"id",1,0);
        $pdf->Cell(35,5,"nom",1,0);
        $pdf->Cell(60,5,"numero",1,0);
        $pdf->Cell(30,5,"adresse",1,0);
        $pdf->Cell(30,5,"capacite",1,0);
        $pdf->Cell(20,5,"idp",1,1);
 foreach($tab as $row)
    {
        $pdf->Cell(20,5,$row["id"],1,0);
        $pdf->Cell(35,5,$row["nom"],1,0);
        $pdf->Cell(60,5,$row["numero"],1,0);
        $pdf->Cell(30,5,$row["adresse"],1,0);
        $pdf->Cell(30,5,$row["capacite"],1,0);
        $pdf->Cell(20,5,$row["idp"],1,1);


    }




 $dest = 'restaurant.pdf';
 $pdf->Output('F', $dest);
 header("location:affichagerestaurant.php");


?>
