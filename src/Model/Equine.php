<?php

namespace App\Model;

// Definition of the Equine class
abstract class Equine
{
    // Définition of the attributes
    private string $name;
    private string $color;
    private int $water;
    private Categorie $categorie;
    private Rider $rider;
    private string $id;
    static private int $nbEquine = 1;


    // Definition of the constructor
    public function __construct(string $name, string $color, int $water, Rider $rider, categorie $categorie)
    {
        $this->setName($name);
        $this->setColor($color);
        $this->setWater($water);
        $this->setCategorie($categorie);
        $this->setRider($rider);
        $this->setId($color,$name);
        self::$nbEquine++;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public static function getNbEquine(): int
    {
        return self::$nbEquine;
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
    public function setId(string $color, string $nom): Equine
    {
        $this->id = "000-" . $nom[0] . "-" . $color[0] . "-" . $this->getnbEquine();
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