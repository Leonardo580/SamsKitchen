<?php


class Users
{
    private $IDa=null;
    private $titre=null;
    private $categorie=null;
    private $IDp=null;


    function __construct(int $IDa, string $titre, int $categorie, string $IDp)
    {
        $this->IDa=$IDa;
        $this->titre=$titre;
        $this->categorie=$categorie;
        $this->IDp=$IDp;
    }


    /**
     * @return int|null
     */
    public function getIDa(): ?int
    {
        return $this->IDa;
    }

    /**
     * @param int|null $IDa
     */
    public function setIDa(?int $IDa): void
    {
        $this->IDa = $IDa;
    }

    /**
     * @return string|null
     */
    public function gettitre(): ?string
    {
        return $this->titre;
    }

    /**
     * @param string|null $titre
     */
    public function settitre(?string $titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return int|null
     */
    public function getcategorie(): ?int
    {
        return $this->categorie;
    }

    /**
     * @param int|null $categorie
     */
    public function setcategorie(?int $categorie): void
    {
        $this->categorie = $categorie;
    }

    /**
     * @return string|null
     */
    public function getIDp(): ?string
    {
        return $this->IDp;
    }

    /**
     * @param string|null $IDp
     */
    public function setIDp(?string $IDp): void
    {
        $this->IDp = $IDp;
    }
    

}