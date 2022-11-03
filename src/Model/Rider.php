<?php

namespace App\Model;

class Rider extends Human
{
    private GameType $gameType;

    /**
     * @var array
     */
    public function __construct(string $nom, string $address, string $street, string $postCode, string $city, GameType $gameType)
    {
        parent::__construct($nom, $address, $street, $postCode, $city, new CatRider());
        $this->setGameType($gameType);
    }

    /**
     * @return GameType
     */
    public function getGameType(): GameType
    {
        return $this->gameType;
    }

    /**
     * @param GameType $gameType
     */
    public function setGameType(): self
    {
        $this->setGameType("Rider");
        return $this;
    }
}