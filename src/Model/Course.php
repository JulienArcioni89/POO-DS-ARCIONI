<?php

namespace App\Model;

// Definition of the Course class
class Course extends Event
{
    // Définition of the constructor
    public function __construct(string $EventName, int $MaxCommitments, int $MaxWater)
    {
        // Call the parent constructor
        parent::__construct($EventName, $MaxCommitments, $MaxWater);
        $this->setEventName("Grand Prix de Caen");
    }

}