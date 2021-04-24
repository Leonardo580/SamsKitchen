<?php


class Reviews
{
    private ?int $id=null;
    private ?int $rate=null;
    private ?string $title=null;
    private ?string $text=null;
    private ?int $CIN=null;

    /**
     * Reviews constructor.
     * @param int|null $id
     * @param int|null $rate
     * @param string|null $title
     * @param string|null $text
     */
    public function __construct(?int $id, ?int $rate, ?string $title, ?string $text, ?int $CIN)
    {
        $this->id = $id;
        $this->rate = $rate;
        $this->title = $title;
        $this->text = $text;
        $this->CIN = $CIN;
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
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getRate(): ?int
    {
        return $this->rate;
    }

    /**
     * @param int|null $rate
     */
    public function setRate(?int $rate): void
    {
        $this->rate = $rate;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string|null $text
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
    }
}