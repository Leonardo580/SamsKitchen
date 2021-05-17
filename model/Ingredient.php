<?PHP
	class Ingredient{
		private ?int $code = null;
		private ?string $nom = null;
		private ?int    $quantite = null;
		private ?float $prix = null;
	    private ?int    $idf = null;
		function __construct(string $nom, int $quantite, float $prix, int $idf){
			
			
			$this->nom=$nom;
			$this->quantite=$quantite;
			$this->prix=$prix;
            $this->idf=$idf;
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
		
		function getIdf(): int{
			return $this->idf;
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
		function setIdf(int $idf): void{
			$this->idf=$idf;
		}
		}
?>