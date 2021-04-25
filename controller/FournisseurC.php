<?PHP
	include "../config.php";
	require_once '../model/Fournisseur.php';

	class FournisseurC {

		function ajouterFournisseur($Fournisseur){
			$sql="INSERT INTO fournisseur (nom,numero,adresse)
			VALUES (:nom,:numero,:adresse)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);

				$query->execute([
					'nom' => $Fournisseur->getNom(),
					'numero' => $Fournisseur->getNum(),
					'adresse' => $Fournisseur->getAdr()

					

				]);
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}
		}

		function afficherFournisseur(){

			$sql="SELECT * FROM Fournisseur";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function supprimerFournisseur($id){
			$sql="DELETE FROM Fournisseur WHERE id= :id";
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

		function modifierFournisseur($Founisseur, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE Fournisseur SET
						nom = :nom
						numero = :numero
						adresse = :adresse

					WHERE id = :id'
				);
				$query->execute([
					'nom' => $Fournisseur->getNom(),
                    'num' => $Fournisseur->getNum(),
                    'adresse' => $Fournisseur->getAdr()


					 
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		}

?>
