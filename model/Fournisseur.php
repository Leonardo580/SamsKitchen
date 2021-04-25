<?PHP
	class Fournisseur{
		private ?int $id = null;
		private ?string $nom = null;
		private ?int    $numero = null;
		private ?string $adresse = null;
		
		function __construct(string $nom, int $numero, string $adresse){
			
			
			$this->nom=$nom;
			$this->numero=$numero;
			$this->adresse=$adresse;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getNum(): int{
			return $this->numero;
		}











		function getAdr(): string{
			return $this->adresse;
		}
		

		function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setNum(int $numero): void{
			$this->num=$numero;
		}
		function setAdr(string $adresse): void{
			$this->adr=$adresse;
		}
		}
?>