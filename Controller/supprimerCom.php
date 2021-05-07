<?PHP
	include "CommandesC.php";

	$commandesC=new CommandesC();

	if (isset($_GET["RefC"])){
		$commandesC->supprimerCommande($_GET["RefC"]);
		header('Location:../View/affichage.php');
	}

?>
