<?php

namespace App\Model;

class Capabilities
{
    protected string $capacite;

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
    public function setCapacite(string $capacite): self
    {
        $this->capacite = $capacite;
        return $this;
    }
}