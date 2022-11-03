<?php

namespace App\Model;

class Manager extends Human
{
    public function __construct(string $nom, string $address, string $street, string $postCode, string $city)
    {
        parent::__construct($nom, $address, $street, $postCode, $city, new CatManager());
    }

    public function __toString(): string
    {
        return "Informations sur la personne sélectionnée en tant que manager sur cette écurie: \n
        Nom: {$this->getNom()} \n
        Adresse: {$this->getAddress()} \n
        Rue: {$this->getStreet()} \n
        Code postal: {$this->getPostCode()} \n
        Ville: {$this->getCity()} \n";
    }
}