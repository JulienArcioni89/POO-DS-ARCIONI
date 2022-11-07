<?php

namespace App\Model;

// Definition of the Rider class
class Rider extends Human
{
    // Définition of the attribute
    private Capabilities $GameType;

    // Definition of the constructor
    public function __construct(string $nom, string $address, string $street, string $postCode, string $city, Capabilities $GameType)
    {
        parent::__construct($nom, $address, $street, $postCode, $city, new CatRider());
        $this->setGameType($GameType);
    }

    /**
     * @return Capabilities
     */
    public function getGameType(): Capabilities
    {
        return $this->GameType->getNom();
    }

    /**
     * @param Capabilities $GameType
     */
    public function setGameType(Capabilities $GameType): Rider
    {
        $this->GameType = $GameType;
        return $this;
    }
}