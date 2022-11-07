<?php

namespace App\Model;

// Definition of the Dressage class
class Dressage extends Capabilities
{
    // Définition of the constructor
    public function __construct( $capacite)
    {
        // Call the parent constructor
        parent::__construct($capacite);
        $this->setCapacite("Dressage");
    }

    // Définition of the __toString() method
    public function __toString()
    {
        return $this->getCapacite();
    }
}