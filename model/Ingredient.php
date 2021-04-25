<?PHP
	class Ingredient{
		private ?int $code = null;
		private ?string $nom = null;
		private ?int    $quantite = null;
		private ?float $prix = null;
		
		function __construct(string $nom, int $quantite, float $prix){
			
			
			$this->nom=$nom;
			$this->quantite=$prix;
			$this->prix=$prix;
		}
		
		function getCode(): int{
			return $this->code;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getQte(): int{
			return $this->quantite;
		}

		function getPrix(): float{
			return $this->prix;
		}
		

		function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setQte(int $quantite): void{
			$this->qte=$quantite;
		}
		function setPrix(string $prix): void{
			$this->prix=$prix;
		}
		}
?>