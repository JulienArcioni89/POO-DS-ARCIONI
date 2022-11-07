<?php

namespace App\Model;

// Definition of the Capabilities class
abstract class Capabilities
{
    // Définition of the attribute
    protected string $capacite;

    // Definition of the constructor
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getCapacite(): string
    {
        return $this->capacite;
    }

    /**
     * @param string $capacite
     */
    public function setCapacite($capacite): self
    {
        $this->capacite = $capacite;
        return $this;
    }
}