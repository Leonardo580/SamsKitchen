<?PHP
	include "restaurantC.php";

	$restaurantC=new restaurantC();

	if (isset($_GET["id"])){
		$restaurantC->supprimerrestaurant($_GET["id"]);
		header('Location:../views/affichage.php');
	}

?>
