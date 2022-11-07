<?php

namespace App\Model;

// Definition of the Manager class
class Manager extends Human
{
    // Définition of the constructor
    public function __construct(string $nom, string $address, string $street, string $postCode, string $city)
    {
        // Call the parent constructor
        parent::__construct($nom, $address, $street, $postCode, $city, new CatManager());
    }

    // Definition of the __toString() method
    public function __toString(): string
    {
        return "Personne crée : informations sur cette personne : \n
        Nom: {$this->getNom()}
        Adresse: {$this->getAddress()}
        Rue: {$this->getStreet()}
        Code postal: {$this->getPostCode()}
        Ville: {$this->getCity()} \n\n";
    }
}