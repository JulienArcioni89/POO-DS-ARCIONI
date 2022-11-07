<?php

namespace App\Model;

// Definition of the Cross class
class Cross extends Capabilities
{
    // Définition of the constructor
    public function __construct( $capacite)
    {
        // Call the parent constructor
        parent::__construct($capacite);
        $this->setCapacite("Cross");
    }

    // Définition of the __toString method
    public function __toString()
    {
        return $this->getCapacite();
    }
}