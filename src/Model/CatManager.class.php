<?php

namespace App\Model;

class CatManager extends Categorie
{
    public function __construct()
    {
        $this->setNom("Manager");
    }
}