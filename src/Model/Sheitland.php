<?php

namespace App\Model;

// Definition of the Sheitland class
class Sheitland extends Equine
{
    // Definition of the constructor
    public function __construct(string $id, string $color, int $water, Rider $rider )
    {
        // Call the parent constructor
        parent::__construct($id, $color, $water, $rider, new CatSheitland());
    }

    // Definition of the __toString() method
    public function __toString()
    {
        return "ID du sheitland : " . $this->getId() . " de couleur " . $this->getColor() . ". A besoin de " . $this->getWater() . "L d'eau. \n";

    }

}