<?php

namespace App\Model;

class Dressage extends Capabilities
{

    public function __construct( $capacite)
    {
        parent::__construct($capacite);
        $this->setCapacite("Dressage");
    }

    public function __toString()
    {
        return $this->getCapacite();
    }
}