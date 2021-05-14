<?PHP
	class restaurant{
		private ?int $id = null;
		private ?string $nom = null;
		private ?int    $numero = null;
		private ?string $adresse = null;
		private ?int    $capacite = null;
		private ?int    $idp = null;
		
		function __construct(string $nom, int $numero, string $adresse,int $capacite,int $idp){
			
			
			$this->nom=$nom;
			$this->numero=$numero;
			$this->adresse=$adresse;
			$this->capacite=$capacite;
			$this->idp=$idp;

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

		function getidp(): int{
			return $this->idp;
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
		
		function setidp(int $idp): void{
			$this->idp=$idp;
		}}
?>