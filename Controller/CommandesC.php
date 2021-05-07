<?PHP
	include "../config.php";
	require_once '../Model/Commandes.php';

	class CommandesC {

		function ajouterCommande($commande){
			$sql="INSERT INTO Commandes (RefC,nomC,quantiteC,prixC,typeC,IdLivr)
			VALUES (:RefC,:nomC,:quantiteC,:prixC, :typeC, :IdLivr)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);

				$query->execute([
					'RefC' => $commande->getRefC(),
                'nomC' => $commande->getnomC(),
                'quantiteC' => $commande->getquantiteC(),
                'prixC' => $commande->getprixC(),
                'typeC' => $commande->gettypeC(),
                'IdLivr' =>$commande->getIdLivr()
	

				]);
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}
		}

		function afficherCommande(){

			$sql="SELECT * FROM Commandes";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function supprimerCommande($RefC){
			$sql="DELETE FROM Commandes WHERE RefC= :RefC";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':RefC',$RefC);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function modifierCommande($commande, $RefC){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE Commandes SET

            nomC= :nomC,
            quantiteC= :quantiteC,
            prixC= :prixC,
            typeC= :typeC,
            IdLivr= :IdLivr
            where (RefC=:RefC)'
			);
	
				$query->execute([
				'nomC' => $commande->getnomC(),
                'quantiteC' => (int)$commande->getquantiteC(),
                'prixC' => $commande->getprixC(),
                'typeC' => $commande->gettypeC(),
                'IdLivr' =>$commande->getIdLivr(),
                'RefC' => (int)$RefC		 
				]);

				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}






		function chercherCommandes($RefC){
			$db=config::getConnexion();
			try {
				$query=$db->prepare("select * from Commandes where (nomC like :RefC)");
			    $RefC=$RefC."%";
				$query->bindValue(':RefC',$RefC);
				$query->execute();
				return $query->fetchAll();
			}catch (Exception $e ){
				die('Error: '.$e->getMessage());
			}
		}

		}

?>
