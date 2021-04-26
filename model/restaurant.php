<?PHP
	class restaurant{
		private ?int $id = null;
		private ?string $nom = null;
		private ?int    $numero = null;
		private ?string $adresse = null;
		private ?int    $capacite = null;

		
		function __construct(string $nom, int $numero, string $adresse,int $capacite){
			
			
			$this->nom=$nom;
			$this->numero=$numero;
			$this->adresse=$adresse;
			$this->capacite=$capacite;
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
		function getcapacite(): int{
			return $this->capacite;
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