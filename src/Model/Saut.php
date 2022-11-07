<?php

namespace App\Model;

// Definition of the Saut class
class Saut extends Capabilities
{
    // Definition of the constructor
    public function __construct($capacite)
    {
        // Call the parent constructor
        parent::__construct($capacite);
        $this->setCapacite("Saut");
    }

    // Definition of the __toString() method
    public function __toString()
    {
        return $this->getCapacite();
    }
}