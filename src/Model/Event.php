<?php

namespace App\Model;

// Definition of the Event class
abstract class Event
{
    // Définition of the attributes
    private int $MaxCommitments;
    private int $MaxWater;
    private array $subscribeHorse = [];
    protected string $EventName;

    // Definition of the constructor
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
        // Check if there are still places available
        if (count($this->subscribeHorse) < $this->MaxCommitments) {
            // Check if there are still water available
            if ($equine->getWater() > $this->getMaxWater()) {
                throw new \Exception("Il n'y a plus d'eau disponible pour cet événement");
            } else {
                // Add the horse to the array
                $this->subscribeHorse[] = $equine;
                echo "L'animal " . $equine->getId() . " a bien été inscrit à l'évènement " . $this->getEventName() . ".\n";
                $this->MaxWater = $this->getMaxWater() - $equine->getWater();
            }
        } else {
            throw new \Exception("Oupss ! L'évènement " . $this->getEventName() . " est complet !\n");
        }

    }

    // Definition of the __toString() method
    public function __toString()
    {
        return "\n\nNom de l'évènement : " . $this->getEventName() .
            " \nNombre de participant(s) : " . $this->getMaxCommitments() .
            " \nNombre de litres d'eau restant en réserve : " . $this->getMaxWater() . "L\n";

    }
}