<?php

//
// MARCHE A SUIVRE EXPLIQUEE EN BAS DE CE FICHIER
//

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

        // Instantiate a Rider object with the jump ability
        $michel = new Rider("Michel", "Rue des Pâtures", "Paris", "75000", "France", $saut);
        echo "Nouveau Rider : " . $michel;

        // Instantiate a Rider object with the dressage ability
        $jean = new Rider("Jean", "Rue des Pâtures", "Paris", "75000", "France", $dressage);
        echo "Nouveau Rider : " . $jean;


        // Instantiate a Horse object with michel as rider
        $cheval = new Horse("Lucky", "Alzan", 100, $michel);
        echo "Nouveau : " . $cheval . "Son cavalier est : " . $michel->getNom() . "\n";
        echo "\n";

        // Instantiate a Poney object with jean as rider
        $poney = new Poney("Abo", "White", 60, $jean);
        echo "Nouveau : " . $poney . "Son cavalier est : " . $jean->getNom() . "\n";
        echo "\n";

        // Instantiate a Sheitland object with michel as rider
        $sheitland = new Sheitland("Bueno", "Pie", 5, $michel);
        echo "Nouveau : " . $sheitland . "Son cavalier est : " . $michel->getNom() . "\n";
        echo "\n";

        // Instantiate a Sheitland object with michel as rider
        $sheitland1 = new Sheitland("Cachou", "Grey", 5, $michel);
        echo "Nouveau : " . $sheitland1 . "Son cavalier est : " . $michel->getNom() . "\n";
        echo "\n";

        // Instantiate a Course with a maximum of 2 commitments and 121 liters of water for the example
        $event = new Course("Grand Prix de Caen", 2, 150);


        // FIRST
//        $subCheval = $event->subscribeHorse($cheval);

        // SECOND
//        $subCheval = $event->subscribeHorse($cheval);
//        $subPoney = $event->subscribeHorse($poney);

        // THIRD
//        $subCheval = $event->subscribeHorse($cheval);
//        $subSheitland1 = $event->subscribeHorse($sheitland1);
//        $subSheitland = $event->subscribeHorse($sheitland);


        // Display the event -> displays the name of the event & number of participants & amount of water remaining
        echo $event;


        //******************************************************************************************************************
        // MARCHE A SUIVRE :
        //******************************************************************************************************************

        // **1** Exécuter le app.php ce qui affichera :
        // Informations sur les personnes créées, le manager et le détail de l'écurie
        // Informations sur les chevaux créés : ID, couleur, besoin en eau et leur cavalier
        // Informations sur le premier évènement créé : nom, nombre de participants et eau restante (150 au début)

        // **2** Décommenter la partie FIRST du code (l.72):
        // Résultat attendu : le cheval Lucky est inscrit à l'évènement Grand Prix de Caen

        // **3** Décommenter la partie SECOND du code (l.75-76) et commenter la partie FIRST :
        // Résultat attendu : Lucky est inscrit mais ERREUR -> plus d'eau disponible pour Abo car Lucky a pris 100L et manque 10L pour Abo

        // **4** Décommenter la partie THIRD du code (l.79-80-81) et commenter la partie SECOND :
        // Résultat attendu : Lucky et Cachou sont inscrits mais pas Bueno car il n'y a plus de place disponible (2 seulement) -> ERREUR après la deuxième inscription.
    }
}