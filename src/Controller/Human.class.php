<?php

namespace App\Controller;

abstract class Human
{
    private string $nom;
    private string $address;
    private string $street;
    private string $postCode;
    private string $city;
    private Categorie $categorie;

    public function __construct(string $nom, string $address, string $street, string $postCode, string $city, Categorie $categorie)
    {
        $this->setNom($nom)
            ->setAddress($address)
            ->setStreet($street)
            ->setPostCode($postCode)
            ->setCity($city)
            ->setCategorie($categorie);
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

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street): self
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostCode(): string
    {
        return $this->postCode;
    }

    /**
     * @param string $postCode
     */
    public function setPostCode(string $postCode): self
    {
        $this->postCode = $postCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return Categorie
     */
    public function getCategorie(): Categorie
    {
        return $this->categorie;
    }

    /**
     * @param Categorie $categorie
     */
    public function setCategorie(Categorie $categorie): self
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function __toString(): string
    {
        return "Informations sur la personne: \n
        Nom: {$this->getNom()} \n
        Adresse: {$this->getAddress()} \n
        Rue: {$this->getStreet()} \n
        Code postal: {$this->getPostCode()} \n
        Ville: {$this->getCity()} \n
        Catégorie: {$this->getCategorie()} \n";
    }

}