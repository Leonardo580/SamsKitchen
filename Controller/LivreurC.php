<?PHP
	include "../config.php";
	require_once '../Model/Livreur.php';

	class LivreurC {

		function ajouterLivreur($Livreur){
			$sql="INSERT INTO Livreur (IdLivr,nomL,prenomL,tel)
			VALUES (:IdLivr,:nomL,:prenomL,:tel)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);

				$query->execute([
					'IdLivr' => $Livreur->getIdLivr(),
					'nomL' => $Livreur->getnomL(),
					'prenomL' => $Livreur->getprenomL(),
					'tel' => $Livreur->getTel()

					

				]);
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}
		}

		function afficherLivreur(){

			$sql="SELECT * FROM Livreur";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function supprimerLivreur($IdLivr){
			$sql="DELETE FROM Livreur WHERE IdLivr= :IdLivr";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':IdLivr',$IdLivr);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function modifierLivreur($Livreur, $IdLivr){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE Livreur SET
						nomL = :nomL
						prenomL = :prenomL
						tel = :tel

					WHERE IdLivr = :IdLivr'
				);
				$query->execute([
					'nomL' => $Livreur->getnomL(),
					'prenomL' => $Livreur->getprenomL(),
					'tel' => $Livreur->getTel()

				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}


        function sort(){
			$db=config::getConnexion();
			try {
				return $db->query("select * from Livreur order by IdLivr desc ;");
			}catch (Exception $e){
				die('Error: '.$e->getMessage());
			}
		}
		
		
}
?>
