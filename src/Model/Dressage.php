<?php

namespace App\Model;

class Dressage extends Capabilities
{
    protected string $nom;

    public function __construct()
    {
        $this->setNom("Dressage");
        $this->setCapacite("Dressage");
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