<?php

namespace App\Model;

class Course extends Event
{
    public function __construct(string $EventName, int $MaxCommitments, int $MaxWater)
    {
        parent::__construct($EventName, $MaxCommitments, $MaxWater);
        $this->setEventName("Grand Prix de Caen");
    }

}