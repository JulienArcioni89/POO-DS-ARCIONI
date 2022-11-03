<?php

namespace App\Controller;

class Manager extends Human
{
    public function __construct(string $nom, string $address, string $street, string $postCode, string $city, Categorie $categorie)
    {
        parent::__construct($nom, $address, $street, $postCode, $city, $categorie);
    }

    public function __toString(): string
    {
        return "Informations sur la personne sélectionnée en tant que manager: \n
        Nom: {$this->getNom()} \n
        Adresse: {$this->getAddress()} \n
        Rue: {$this->getStreet()} \n
        Code postal: {$this->getPostCode()} \n
        Ville: {$this->getCity()} \n
        Catégorie: {$this->getCategorie()} \n";
    }
}