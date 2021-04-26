<?PHP
	class Livreur{
		private ?int $IdLivr = null;
		private ?string $nomL = null;
		private ?string  $prenomL = null;
		private ?int $tel = null;
		
		function __construct(int $IdLivr, string $nomL, string  $prenomL,int $tel ){
			
			$this->IdLivr=$IdLivr;
			$this->nomL=$nomL;
			$this->prenomL=$prenomL;
			$this->tel=$tel;
		}
		
		function getIdLivr(): int{
			return $this->IdLivr;
		}
		function getnomL(): string{
			return $this->nomL;
		}
		function getprenomL(): string{
			return $this->prenomL;
		}
		function getTel(): int{
			return $this->tel;
		}

		function setIdLivr(int $IdLivr): void{
			$this->IdLivr=$IdLivr;
		}

		function setnomL(string $nomL): void{
			$this->nomL=$nomL;
		}
		function setprenomL(string $prenomL): void{
			$this->prenomL=$prenomL;
		}
		function setTel(int $tel): void{
			$this->qte=$tel;
		}
		
		}
?>