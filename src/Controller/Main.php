<?php

namespace App\Controller;

use App\Model\Course;
use App\Model\Horse;
use App\Model\Manager;
use App\Model\Stable;
use App\Model\Rider;
use App\Model\Saut;
use App\Model\Poney;
use App\Model\Sheitland;
use App\Model\Dressage;

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
        $cheval = new Horse("Cheval-1", "blanc", 100, $michel);
        echo "Nouveau : " . $cheval;
        // On instancie un objet Poney
        $poney = new Poney("Poney-1", "noir", 40, $jean);
        echo "Nouveau : " . $poney;
        // On instancie un objet Sheitland
        $sheitland = new Sheitland("Sheitland-1", "marron", 60, $michel);
        echo "Nouveau : " . $sheitland;


        // On ajoute les animaux à l'écurie
        $equines = [$cheval, $poney, $sheitland];

        // On crée un évènement
        $event = new Course("Grand Prix de Caen", 10, 500);
        echo $event;

    }
}