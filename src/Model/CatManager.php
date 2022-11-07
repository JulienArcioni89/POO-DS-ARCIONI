<?php

namespace App\Model;

// Definition of the CatManager class
class CatManager extends Categorie
{
    // Définition of the constructor
    public function __construct()
    {
        $this->setNom("Manager");
    }
}