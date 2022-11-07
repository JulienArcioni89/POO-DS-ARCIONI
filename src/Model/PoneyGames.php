<?php

namespace App\Model;

// Definition of the PoneyGames class
class PoneyGames extends Capabilities
{
    // Définition of the constructor
    public function __construct( $capacite)
    {
        // Call the parent constructor
        parent::__construct($capacite);
        $this->setCapacite("PoneyGames");
    }

    // Definition of the __toString() method
    public function __toString()
    {
        return $this->getCapacite();
    }
}