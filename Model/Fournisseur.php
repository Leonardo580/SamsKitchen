<?PHP
	class Fournisseur{
		private ?int $id = null;
		private ?string $nom = null;
        private $img; 
		private ?int    $numero = null;
		private ?string $mail = null;
		private ?string $adresse = null;
		
		function __construct(string $nom,$img, int $numero, string $mail, string $adresse){
			
			
			$this->nom=$nom;
			$this->img=$img;
			$this->numero=$numero;
            $this->mail=$mail;
			$this->adresse=$adresse;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getNom(): string{
			return $this->nom;
		}
	    function getImg()
        {
            return $this->img;
        }
	    function getMail(): string{
			return $this->mail;
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
		function setImg($img)
        {
         $this->img=$img;
        }
		function setNum(int $numero): void{
			$this->num=$numero;
		}
		function setMail(string $mail): void{
			$this->mail=$mail;
		}
		function setAdr(string $adresse): void{
			$this->adr=$adresse;
		}
		}
?>