<?PHP
	include "../config.php";
	require_once '../Model/Ingredient.php';

	class IngredientC {

		function ajouterIngredient($Ingredient){
			$sql="INSERT INTO Ingredient (nom,quantite,prix,idf)
			VALUES (:nom,:quantite,:prix,:idf)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);

				$query->execute([
					'nom' => $Ingredient->getNom(),
					'quantite' => $Ingredient->getQte(),
					'prix' => $Ingredient->getPrix(),
					'idf' => $Ingredient->getIdf()


					

				]);
				
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}
		}

		function afficherIngredient(){

			$sql="SELECT * FROM Ingredient";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		 function trierIngredient(){

			$sql="SELECT * FROM Ingredient order by prix";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function supprimerIngredient($code){
			$sql="DELETE FROM Ingredient WHERE code= :code";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':code',$code);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function modifierIngredient($Ingredient, $code){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE Ingredient SET
						nom = :nom
						quantite = :quantite
						prix = :prix
						idf = :idf

					WHERE code = :code'
				);
				$query->execute([
					'nom' => $Ingredient->getNom(),
					'quantite' => $Ingredient->getQte(),
					'prix' => $Ingredient->getPrix(),
					'idf' => $Ingredient->getIdf()

				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		
		
}
?>
