<?php

namespace App\Model;

abstract class Event
{
    private int $MaxCommitments;
    private int $MaxWater;
    private array $subscribeHorse = [];
    protected string $EventName;

    public function __construct(string $EventName, int $MaxCommitments, int $MaxWater)
    {
        $this->setMaxCommitments($MaxCommitments);
        $this->setMaxWater($MaxWater);
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
     * @return string $subscribeHorse
     */
    public function subscribeHorse(Equine $equine): void
    {
        if (count($this->subscribeHorse) < $this->MaxCommitments) {
            if ($equine->getWater() > $this->getMaxWater()) {
                echo "Oupss ! L'animal " . $equine->getId() . " NE PEUT PAS participer à l'évènement " . $this->getEventName() . " car il a besoin d'une trop grande qualtité d'eau (". $equine->getWater() . "L).\n";
            } else {
                $this->subscribeHorse[] = $equine;
                echo "L'animal " . $equine->getId() . " a bien été inscrit à l'évènement " . $this->getEventName() . ".\n";
                $this->MaxWater = $this->getMaxWater() - $equine->getWater();
            }
        } else {
            echo "Oupss ! L'animal " . $equine->getId() . " NE PEUT PAS participer à l'évènement " . $this->getEventName() . " car il n'y a plus de place.\n";
        }

    }

    public function __toString()
    {
        return "Nom de l'évènement : " . $this->getEventName() .
            " \nNombre de participants maximum : " . $this->getMaxCommitments() .
            " \nNombre de litres d'eau en réserve : " . $this->getMaxWater() . "L\n";

    }
}