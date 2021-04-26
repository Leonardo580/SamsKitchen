<?PHP
	include "platC.php";

	$platC=new platC();

	if (isset($_GET["code"])){
		$platC->supprimerplat($_GET["code"]);
		header('Location:../views/affichage2.php');
	}

?>
