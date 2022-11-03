<?php

namespace App\Model;

class Rider extends Human
{
    private Capabilities $gameType;

    /**
     * @var array
     */
    public function __construct(string $nom, string $address, string $street, string $postCode, string $city, Capabilities $gameType)
    {
        parent::__construct($nom, $address, $street, $postCode, $city, new CatRider());
        $this->setGameType($gameType);
    }

    /**
     * @return Capabilities
     */
    public function getGameType(): Capabilities
    {
        return $this->gameType;
    }

    /**
     * @param Capabilities $gameType
     */
    public function setGameType(Capabilities $gameType): Rider
    {
        $this->GameType = $gameType;
        return $this;
    }
}