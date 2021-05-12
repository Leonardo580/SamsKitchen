<?php


class articles
{
    private $CIN=null;
    private $FullName=null;
    private $Age=null;
    private $Email=null;
  



    function __construct(int $cin, string $fn, int $age, string $email)
    {
        $this->CIN=$cin;
        $this->FullName=$fn;
        $this->Age=$age;
        $this->Email=$email;
    }


    /**
     * @return int|null
     */
    public function getCIN(): ?int
    {
        return $this->CIN;
    }

    /**
     * @param int|null $CIN
     */
    public function setCIN(?int $CIN): void
    {
        $this->CIN = $CIN;
    }

    /**
     * @return string|null
     */
    public function getFullName(): ?string
    {
        return $this->FullName;
    }

    /**
     * @param string|null $FullName
     */
    public function setFullName(?string $FullName): void
    {
        $this->FullName = $FullName;
    }

    /**
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->Age;
    }

    /**
     * @param int|null $Age
     */
    public function setAge(?int $Age): void
    {
        $this->Age = $Age;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }

    /**
     * @param string|null $Email
     */
    public function setEmail(?string $Email): void
    {
        $this->Email = $Email;
    }
   

}