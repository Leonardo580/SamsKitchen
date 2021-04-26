<?PHP
	include "../config.php";
	require_once '../model/restaurant.php';

	class restaurantC {

		function ajouterrestaurant($restaurant){
			$sql="INSERT INTO restaurant (nom,numero,adresse,capacite)
			VALUES (:nom,:numero,:adresse,:capacite)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);

				$query->execute([
					'nom' => $restaurant->getNom(),
					'numero' => $restaurant->getNum(),
					'adresse' => $restaurant->getAdr(),
					'capacite' => $restaurant->getcapacite()

					

				]);
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}
		}

		function afficherrestaurant(){

			$sql="SELECT * FROM restaurant";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function supprimerrestaurant($id){
			$sql="DELETE FROM restaurant WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function modifierrestaurant($Founisseur, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE restaurant SET
						nom = :nom
						numero = :numero
						adresse = :adresse
						capacite = :capacite

					WHERE id = :id'
				);
				$query->execute([
					'nom' => $restaurant->getNom(),
                    'num' => $restaurant->getNum(),
                    'adresse' => $restaurant->getAdr(),
					'capacite'=> $restaurant->getcapacite()


					 
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		}

?>
