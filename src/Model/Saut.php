<?php

namespace App\Model;

class Saut extends Capabilities
{
    protected string $nom;

    public function __construct()
    {
        $this->setNom("Saut");
        $this->setCapacite("Saut");
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