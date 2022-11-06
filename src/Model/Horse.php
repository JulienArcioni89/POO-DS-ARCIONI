<?php

namespace App\Model;

class Horse extends Equine
{
    public function __construct(string $id, string $color, int $water, Rider $rider )
    {
        parent::__construct($id, $color, $water, $rider, new CatHorse());
    }

    public function __toString()
    {
        return "ID du cheval : " . $this->getId() . " de couleur " . $this->getColor() . ". Possède " . $this->getWater() . "L d'eau. \n";

    }

}