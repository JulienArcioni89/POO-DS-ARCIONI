<?php

namespace App\Model;

class Cross extends Capabilities
{
    protected string $nom;

    public function __construct()
    {
        $this->setNom("Cross");
        $this->setCapacite("Cross");
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