<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\XenomorphRepository")
 */
class Xenomorph
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=3000)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=2048)
     */
    private $img_src;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $img_alt;

    /**
     * @ORM\Column(type="float")
     */
    private $size;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $feeding;

    /**
     * @ORM\Column(type="integer")
     */
    private $dangerous;

    /**
     * @ORM\Column(type="boolean")
     */
    private $available;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $type;

    /**
     * @ORM\Column(type="float")
     */
    private $pressure;

    /**
     * @ORM\Column(type="float")
     */
    private $temperature;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $atmosphere;

    /**
     * @ORM\Column(type="float")
     */
    private $atmoshpere_value;

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getImgSrc(): ?string
    {
        return $this->img_src;
    }

    public function setImgSrc(string $img_src): self
    {
        $this->img_src = $img_src;

        return $this;
    }

    public function getImgAlt(): ?string
    {
        return $this->img_alt;
    }

    public function setImgAlt(string $img_alt): self
    {
        $this->img_alt = $img_alt;

        return $this;
    }

    public function getSize(): ?float
    {
        return $this->size;
    }

    public function setSize(float $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getFeeding(): ?string
    {
        return $this->feeding;
    }

    public function setFeeding(string $feeding): self
    {
        $this->feeding = $feeding;

        return $this;
    }

    public function getDangerous(): ?int
    {
        return $this->dangerous;
    }

    public function setDangerous(int $dangerous): self
    {
        $this->dangerous = $dangerous;

        return $this;
    }

    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    public function setAvailable(bool $available): self
    {
        $this->available = $available;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPressure(): ?float
    {
        return $this->pressure;
    }

    public function setPressure(float $pressure): self
    {
        $this->pressure = $pressure;

        return $this;
    }

    public function getTemperature(): ?float
    {
        return $this->temperature;
    }

    public function setTemperature(float $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getAtmosphere(): ?string
    {
        return $this->atmosphere;
    }

    public function setAtmosphere(string $atmosphere): self
    {
        $this->atmosphere = $atmosphere;

        return $this;
    }

    public function getAtmoshpereValue(): ?float
    {
        return $this->atmoshpere_value;
    }

    public function setAtmoshpereValue(float $atmoshpere_value): self
    {
        $this->atmoshpere_value = $atmoshpere_value;

        return $this;
    }
}
