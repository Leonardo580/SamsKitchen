<?PHP
	include "../config.php";
	require_once '../Model/plat.php';

	class platC {
		function ajouterplat($plat){
			$img=$plat->getImg();
			$sql="INSERT INTO plat (nomplat,image,recette,ingrediants,prix)
			VALUES (:nomplat,'$image',:recette,:ingrediants,:prix)";
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
						image = :imahe
						recette = :recette
						ingrediants = :ingrediants
						prix = :prix

					WHERE code = :code'
				);
				$query->execute([
					'nomplat' => $plat->getnomplat(),
					'image'=> $plat->getImg(),
					'recette' => $plat->getrecette(),
					'ingrediants' => $plat->getingrediants(),
					'prix' => $plat->getPrix()

				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function chercherplat($RefC){
			$db=config::getConnexion();
			try {
				$query=$db->prepare("select * from plat where (nomplat like :RefC)");
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
