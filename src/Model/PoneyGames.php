<?php

namespace App\Model;

class PoneyGames extends Capabilities
{
    protected string $nom;

    public function __construct()
    {
        $this->setNom("PoneyGames");
        $this->setCapacite("PoneyGames");
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }
}