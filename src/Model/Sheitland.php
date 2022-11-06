<?php

namespace App\Model;

class Sheitland extends Equine
{
    public function __construct(string $id, string $color, int $water, Rider $rider )
    {
        parent::__construct($id, $color, $water, $rider, new CatSheitland());
    }

    public function __toString()
    {
        return "ID du sheitland : " . $this->getId() . " de couleur " . $this->getColor() . ". A besoin de " . $this->getWater() . "L d'eau. \n";

    }

}