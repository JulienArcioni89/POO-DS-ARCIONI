<?php

namespace App\Model;

// Definition of the Poney class
class Poney extends Equine
{
    // Définition of the constructor
    public function __construct(string $id, string $color, int $water, Rider $rider )
    {
        // Call the parent constructor
        parent::__construct($id, $color, $water, $rider, new CatPoney());
    }

    // Definition of the __toString() method
    public function __toString()
    {
        return "ID du poney : " . $this->getId() . " de couleur " . $this->getColor() . ". A besoin de " . $this->getWater() . "L d'eau. \n";
    }
}