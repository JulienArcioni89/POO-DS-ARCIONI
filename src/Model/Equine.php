<?php

namespace App\Model;

// Definition of the Equine class
abstract class Equine
{
    // Définition of the attributes
    private string $id;
    private string $color;
    private int $water;
    private Categorie $categorie;
    private Rider $rider;
    private Stable $stable;

    // Definition of the constructor
    public function __construct(string $id, string $color, int $water, Rider $rider, categorie $categorie)
    {
        $this->setId($id);
        $this->setColor($color);
        $this->setWater($water);
        $this->setCategorie($categorie);
        $this->setRider($rider);
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): self
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return int
     */
    public function getWater(): int
    {
        return $this->water;
    }

    /**
     * @param int $water
     */
    public function setWater(int $water): self
    {
        $this->water = $water;
        return $this;
    }

    /**
     * @return Categorie
     */
    public function getCategorie(): Categorie
    {
        return $this->categorie;
    }

    /**
     * @param Categorie $categorie
     */
    public function setCategorie(Categorie $categorie): self
    {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * @return Rider
     */
    public function getRider(): Rider
    {
        return $this->rider;
    }

    /**
     * @param Rider $rider
     */
    public function setRider(Rider $rider): self
    {
        $this->rider = $rider;
        return $this;
    }

    public function __toString()
    {
        return $this->getId();
    }
}