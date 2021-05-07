<?PHP
	include "IngredientC.php";

	$ingredientC=new IngredientC();

	if (isset($_GET["code"])){
		$ingredientC->supprimerIngredient($_GET["code"]);
		header('Location:../View/affichage2.php');
	}

?>
