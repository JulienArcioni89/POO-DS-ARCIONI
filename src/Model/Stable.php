<?php

namespace App\Model;

class Stable
{
    // Definition of the attributes
    private string $nom;
    private string $address;
    private string $street;
    private string $postCode;
    private string $city;
    private Manager $manager;
    private array $equines;

    // Definition of the constructor
    public function __construct(string $nom, string $address, string $street, string $postCode, string $city, Manager $manager)
    {
        $this->setNom($nom)
            ->setAddress($address)
            ->setStreet($street)
            ->setPostCode($postCode)
            ->setCity($city)
            ->setManager($manager);
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
    public function setNom($nom): self
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
    public function setAddress($address): self
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
    public function setStreet($street): self
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
    public function setPostCode($postCode): self
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
    public function setCity($city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return Manager
     */
    public function getManager(): Manager
    {
        return $this->manager;
    }

    /**
     * @param Manager $manager
     */
    public function setManager($manager): self
    {
        $this->manager = $manager;
        return $this;
    }


    /**
     * @return array
     */
    public function getEquines(): array
    {
        return $this->equines;
    }

    /**
     * @param array $equines
     */
    public function setEquines(array $equines): void
    {
        $this->equines = $equines;
    }

    /**
     * @param Equine $equine
     */
    public function addEquine(Equine $equine): array
    {
        $this->equines[] = $equine;
        return $this->equines;
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return "Détails de l'écurie: \n
        Nom: {$this->getNom()}
        Adresse: {$this->getAddress()}
        Rue: {$this->getStreet()}
        Code postal: {$this->getPostCode()}
        Ville: {$this->getCity()}
        Manager: {$this->getManager()->getNom()}\n\n";
    }

}