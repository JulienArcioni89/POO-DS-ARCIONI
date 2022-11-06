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
        return "Informations sur la personne sélectionnée en tant que manager : \n
        Nom: {$this->getNom()}
        Adresse: {$this->getAddress()}
        Rue: {$this->getStreet()}
        Code postal: {$this->getPostCode()}
        Ville: {$this->getCity()} \n";
    }
}