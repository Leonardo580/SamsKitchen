<?php


class Users
{
    private ?int $CIN=null;
    private ?string $FullName=null;
    private ?int $Age=null;
    private ?string $Email=null;
    private ?string $Password=null;
    private ?bool $isActive=null;



    function __construct(int $cin, string $fn, int $age, string $email, string $password, bool $isActive)
    {
        $this->CIN=$cin;
        $this->FullName=$fn;
        $this->Age=$age;
        $this->Email=$email;
        $this->Password=$password;
        $this->isActive=$isActive;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->Password;
    }

    /**
     * @param string|null $Password
     */
    public function setPassword(?string $Password): void
    {
        $this->Password = $Password;
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
    /**
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @param bool|null $isActive
     */
    public function setIsActive(?bool $isActive): void
    {
        $this->isActive = $isActive;
    }

}