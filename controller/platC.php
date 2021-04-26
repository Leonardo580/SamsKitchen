<?PHP
	include "../config.php";
	require_once '../model/plat.php';

	class platC {

		function ajouterplat($plat){
			$sql="INSERT INTO plat (nomplat,recette,ingrediants,prix)
			VALUES (:nomplat,:recette,:ingrediants,:prix)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);

				$query->execute([
					'nomplat' => $plat->getnomplat(),
					'recette' => $plat->getrecette(),
					'prix' => $plat->getPrix(),
					'ingrediants' => $plat->getingrediants()

					

				]);
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}
		}

		function afficherplat(){

			$sql="SELECT * FROM plat";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function supprimerplat($code){
			$sql="DELETE FROM plat WHERE code= :code";
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

		function modifierplat($plat, $code){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE plat SET
						nomplat = :nomplat
						recette = :recette
						ingrediants = :ingrediants
						prix = :prix

					WHERE code = :code'
				);
				$query->execute([
					'nomplat' => $plat->getnomplat(),
					'recette' => $plat->getrecette(),
					'ingrediants' => $plat->getingrediants(),
					'prix' => $plat->getPrix()

				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		
		
}
?>
