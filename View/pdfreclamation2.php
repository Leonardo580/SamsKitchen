 <?php
include "../Model/Ingredient.php";
include "../Controller/IngredientC.php";
require ("fpdf.php");



$omaima=new IngredientC();
$tab=$omaima-> afficherIngredient();
$pdf=new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(60,5,'Liste des ingredients',0,1);
      $pdf->Cell(130,5,' ',0,1);
      $pdf->SetFont('Arial','B',14);


       $pdf->Cell(20,5,"code",1,0);
        $pdf->Cell(35,5,"nom",1,0);
        $pdf->Cell(60,5,"quantite",1,0);
        $pdf->Cell(30,5,"prix",1,0);
        $pdf->Cell(30,5,"idf",1,1);
 foreach($tab as $row)
    {
        $pdf->Cell(20,5,$row["code"],1,0);
        $pdf->Cell(35,5,$row["nom"],1,0);
        $pdf->Cell(60,5,$row["quantite"],1,0);
        $pdf->Cell(30,5,$row["prix"],1,0);
        $pdf->Cell(30,5,$row["idf"],1,1);

    }




 $dest = 'Ingredients.pdf';
 $pdf->Output('F', $dest);
 header("location:affichage2.php");


?>
