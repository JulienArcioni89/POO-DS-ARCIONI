<?php

namespace App\Model;

class Saut extends Capabilities
{

    public function __construct( $capacite)
    {
        parent::__construct($capacite);
        $this->setCapacite("Saut");
    }

    public function __toString()
    {
        return $this->getCapacite();
    }
}