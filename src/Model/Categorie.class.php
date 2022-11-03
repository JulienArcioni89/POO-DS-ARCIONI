<?php

namespace App\Model;

abstract class Categorie
{
    protected string $nom;

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