<?PHP
	class Commandes{
		private ?int $RefC=null;
    private ?string $nomC=null;
    private ?int $quantiteC=null;
    private ?int $prixC=null;
    private ?string $typeC=null;
    private ?int $IdLivr=null;
		
		function __construct(int $RefC, string $nomC, int $quantiteC, int $prixC, string $typeC, int $IdLivr){
			
			
			$this->RefC=$RefC;
			$this->nomC=$nomC;
			$this->quantiteC=$quantiteC;
			$this->prixC=$prixC;
			$this->typeC=$typeC;
			$this->IdLivr=$IdLivr;
		}
		
	 function getRefC(): ?int
    {
        return $this->RefC;
    }
		
	function setRefC(?int $RefC): void
    {
        $this->RefC = $RefC;
    }
	function getnomC(): ?string
    {
        return $this->nomC;
    }
	function setnomC(?string $nomC): void
    {
        $this->nomC = $nomC;
    }

	function getquantiteC(): ?int
    {
        return $this->quantiteC;
    }

	function setquantiteC(?int $quantiteC): void
    {
        $this->quantiteC = $quantiteC;
    }
    
	function getprixC(): ?int
    {
        return $this->prixC;
    }

	function setprixC(?int $prixC): void
    {
        $this->prixC = $prixC;
    }

	function gettypeC(): ?string
    {
        return $this->typeC;
    }

	function settypeC(?string $typeC): void
    {
        $this->type = $typeC;
    }
	function getIdLivr(): ?int
    {
        return $this->IdLivr;
    }

	function setIdLivr(?int $IdLivr): void
    {
        $this->IdLivr = $IdLivr;
    }




		}
		
?>