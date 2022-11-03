<?php

namespace App\Controller;

class Rider extends Human
{
    public function __construct(string $nom, string $address, string $street, string $postCode, string $city, Categorie $categorie)
    {
        parent::__construct($nom, $address, $street, $postCode, $city, $categorie);
    }

}