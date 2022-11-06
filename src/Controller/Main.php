<?php

namespace App\Controller;

// Importing classes
use App\Model\Horse;
use App\Model\Poney;
use App\Model\Sheitland;
use App\Model\Manager;
use App\Model\Stable;
use App\Model\Rider;
use App\Model\Course;
use App\Model\Saut;
use App\Model\Dressage;

// Definition of the Main class
class Main
{
    // Définition of the  attributes
    public function execute()
    {
        // Instantiate a Manager object
        $manager = new Manager("Jean", "Rue des Tilleuls", "Caen", "14000", "France");
        echo $manager;

        // Instantiate a Stable object
        $ecurie = new Stable("Ecurie de la ferme", "Rue de la ferme", "Caen", "14000", "France", $manager);
        echo $ecurie;

        // Instantiate a jump ability and a dressage ability
        $saut = new Saut("Saut");
        $dressage = new Dressage("Dressage");

        // Instantiate a Rider object
        $michel = new Rider("Michel", "Rue des Pâtures", "Paris", "75000", "France", $saut);
        echo "Nouveau Rider : " . $michel;

        // Instantiate a Rider object
        $jean = new Rider("Jean", "Rue des Pâtures", "Paris", "75000", "France", $dressage);
        echo "Nouveau Rider : " . $jean;


        // Instantiate a Horse object
        $cheval = new Horse("10", "blanc", 100, $michel);
        echo "Nouveau : " . $cheval . "Son cavalier est : " . $michel->getNom() . "\n";
        echo "\n";

        // Instantiate a Poney object
        $poney = new Poney("20", "noir", 60, $jean);
        echo "Nouveau : " . $poney . "Son cavalier est : " . $jean->getNom() . "\n";
        echo "\n";

        // Instantiate a Sheitland object
        $sheitland = new Sheitland("30", "marron", 20, $michel);
        echo "Nouveau : " . $sheitland . "Son cavalier est : " . $michel->getNom() . "\n";
        echo "\n";

        // Instantiate a Sheitland object
        $sheitland1 = new Sheitland("31", "pink", 20, $michel);
        echo "Nouveau : " . $sheitland . "Son cavalier est : " . $michel->getNom() . "\n";
        echo "\n";

        // Instantiate a Course
        $event = new Course("Grand Prix de Caen", 2, 120);

        // Add horses to the event
        $subCheval = $event->subscribeHorse($cheval);
        $subPoney = $event->subscribeHorse($poney);
        $subSheitland = $event->subscribeHorse($sheitland);
        $subSheitland1 = $event->subscribeHorse($sheitland1);

    }
}