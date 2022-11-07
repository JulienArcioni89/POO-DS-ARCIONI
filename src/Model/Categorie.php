<?php

namespace App\Model;

// Definition of the Categorie class
abstract class Categorie
{
    // Définition of the attribute
    protected string $nom;

    // Definition of the constructor
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

}