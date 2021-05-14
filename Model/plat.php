<?PHP
	class plat{
		private $image; 
		private ?int $code = null;
		private ?string $nomplat = null;
		private ?string    $recette = null;
		private ?float $prix = null;
		private ?string    $ingrediants = null;
		
		function __construct(string $nomplat,$image, string $recette,string $ingrediants, float $prix){
			
			
			$this->nomplat=$nomplat;
			$this->image=$image;
			$this->ingrediants=$ingrediants;
			$this->recette=$recette;
			$this->prix=$prix;
		}
		
		function getCode(): int{
			return $this->code;
		}
		function getImg()
        {
            return $this->image;
        }
		function getnomplat(): string{
			return $this->nomplat;
		}
		function getrecette(): string{
			return $this->recette;
		}
		function getingrediants(): string{
			return $this->ingrediants;
		}

		function getPrix(): float{
			return $this->prix;
		}
		

		function setnomplat(string $nomplat): void{
			$this->nomplat=$nomplat;
		}
		function setImg($image)
        {
         $this->image=$image;
        }
		function setrecette(string $recette): void{
			$this->recette=$recette;
		}
		function setingrediants(string $ingrediants): void{
			$this->ingrediants=$ingrediants;}
		function setPrix(float $prix): void{
			$this->prix=$prix;
		}
		}
?>