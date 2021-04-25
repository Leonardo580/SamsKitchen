<?PHP
	include "FournisseurC.php";

	$fournisseurC=new FournisseurC();

	if (isset($_GET["id"])){
		$fournisseurC->supprimerFournisseur($_GET["id"]);
		header('Location:../views/affichage.php');
	}

?>
