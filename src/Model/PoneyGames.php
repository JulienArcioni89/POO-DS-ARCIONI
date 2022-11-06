<?php

namespace App\Model;

class PoneyGames extends Capabilities
{

    public function __construct( $capacite)
    {
        parent::__construct($capacite);
        $this->setCapacite("PoneyGames");
    }

    public function __toString()
    {
        return $this->getCapacite();
    }
}