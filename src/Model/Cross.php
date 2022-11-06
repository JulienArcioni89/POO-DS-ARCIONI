<?php

namespace App\Model;

class Cross extends Capabilities
{

    public function __construct( $capacite)
    {
        parent::__construct($capacite);
        $this->setCapacite("Cross");
    }

    public function __toString()
    {
        return $this->getCapacite();
    }
}