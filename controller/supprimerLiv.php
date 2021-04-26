<?PHP
	include "LivreurC.php";

	$livreurC=new LivreurC();

	if (isset($_GET["IdLivr"])){
		$livreurC->supprimerLivreur($_GET["IdLivr"]);
		header('Location:../views/affichage2.php');
	}

?>
