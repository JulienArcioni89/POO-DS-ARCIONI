<?php

namespace App\Model;

class Sheitland extends Equine
{
    protected string $nom;

    public function __construct()
    {
        $this->setNom("Sheitland");
        $this->setCapacite("Sheitland");
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