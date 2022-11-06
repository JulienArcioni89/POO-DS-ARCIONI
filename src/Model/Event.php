<?php

namespace App\Model;

abstract class Event
{
    private int $MaxCommitments;
    private int $MaxWater;
    private string $subscribeHorse;
    protected string $EventName;



    public function __construct(string $EventName, int $MaxCommitments, int $MaxWater)
    {
        $this->setMaxCommitments($MaxCommitments);
        $this->setMaxWater($MaxWater);
    }


    /**
     * @return int
     */
    public function getMaxCommitments(): int
    {
        return $this->MaxCommitments;
    }

    /**
     * @param int $MaxCommitments
     */
    public function setMaxCommitments(int $MaxCommitments): self
    {
        $this->MaxCommitments = $MaxCommitments;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxWater(): int
    {
        return $this->MaxWater;
    }

    /**
     * @param int $MaxWater
     */
    public function setMaxWater(int $MaxWater): self
    {
        $this->MaxWater = $MaxWater;
        return $this;
    }


    /**
     * @return string
     */
    public function getEventName(): string
    {
        return $this->EventName;
    }

    /**
     * @param string $EventName
     */
    public function setEventName(string $EventName): self
    {
        $this->EventName = $EventName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubscribeHorse(): string
    {
        return $this->subscribeHorse;
    }

    /**
     * @param string $subscribeHorse
     */
    public function setSubscribeHorse(string $subscribeHorse): self
    {
        $this->subscribeHorse = $subscribeHorse;
        return $this;
    }
    public function subscribeHorse(Horse $horse): self
    {
        if ($horse->getWater() > $this->getMaxWater()) {
            echo "L'animal " . $horse->getId() . " ne peut pas participer à l'évènement " . $this->getEventName() . " car il a trop d'eau en réserve.";
        } else {
            echo "L'animal " . $horse->getId() . " a bien été inscrit à l'évènement " . $this->getEventName() . ".";
        }
        return $this;
    }
    public function __toString()
    {
        return "Nom de l'évènement : " . $this->getEventName() .
            " \nNombre de participants maximum : " . $this->getMaxCommitments() .
            " \nNombre de litres d'eau en réserve : " . $this->getMaxWater();

    }
}