<?php

namespace App\Controller;

use App\Model\Horse;
use App\Model\Poney;
use App\Model\Sheitland;
use App\Model\Manager;
use App\Model\Stable;
use App\Model\Rider;
use App\Model\Course;
use App\Model\Saut;
use App\Model\Dressage;
use App\Model\Event;


class Main
{
    public function execute()
    {
        // On instancie un objet Manager
        $manager = new Manager("Jean", "Rue des Tilleuls", "Caen", "14000", "France");
        echo $manager;

        // On instancie un objet Stable
        $ecurie = new Stable("Ecurie de la ferme", "Rue de la ferme", "Caen", "14000", "France", $manager);
        echo $ecurie;

        // On instancie une capacité saut et une capacité dressage
        $saut = new Saut("Saut");
        $dressage = new Dressage("Dressage");

        // On instancie un objet Rider
        $michel = new Rider("Michel", "Rue des Pâtures", "Paris", "75000", "France", $saut);
        echo "Nouveau Rider : " . $michel;

        // On instancie un objet Rider
        $jean = new Rider("Jean", "Rue des Pâtures", "Paris", "75000", "France", $dressage);
        echo "Nouveau Rider : " . $jean;


        // On instancie un objet Horse
        $cheval = new Horse("10", "blanc", 100, $michel);
        echo "Nouveau : " . $cheval . "Son cavalier est : " . $michel->getNom() . "\n";
        echo "\n";

        // On instancie un objet Poney
        $poney = new Poney("20", "noir", 60, $jean);
        echo "Nouveau : " . $poney . "Son cavalier est : " . $jean->getNom() . "\n";
        echo "\n";

        // On instancie un objet Sheitland
        $sheitland = new Sheitland("30", "marron", 20, $michel);
        echo "Nouveau : " . $sheitland . "Son cavalier est : " . $michel->getNom() . "\n";
        echo "\n";

        // On instancie un objet Sheitland
        $sheitland1 = new Sheitland("31", "pink", 20, $michel);
        echo "Nouveau : " . $sheitland . "Son cavalier est : " . $michel->getNom() . "\n";
        echo "\n";

        // On crée un évènement
        $event = new Course("Grand Prix de Caen", 2, 120);

        // On ajoute des chevaux à l'évènement
        $subCheval = $event->subscribeHorse($cheval);
        $subPoney = $event->subscribeHorse($poney);
        $subSheitland = $event->subscribeHorse($sheitland);
        $subSheitland1 = $event->subscribeHorse($sheitland1);

    }
}