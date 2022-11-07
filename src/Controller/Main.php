<?php

//
// EXECUTER LE FICHIER "app.php" POUR VOIR LE RESULTAT DECRIT EN BAS DE CE FICHIER
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
        $cheval = new Horse("10", "Alzan", 100, $michel);
        echo "Nouveau : " . $cheval . "Son cavalier est : " . $michel->getNom() . "\n";
        echo "\n";

        // Instantiate a Poney object with jean as rider
        $poney = new Poney("20", "White", 60, $jean);
        echo "Nouveau : " . $poney . "Son cavalier est : " . $jean->getNom() . "\n";
        echo "\n";

        // Instantiate a Sheitland object with michel as rider
        $sheitland = new Sheitland("30", "Pie", 20, $michel);
        echo "Nouveau : " . $sheitland . "Son cavalier est : " . $michel->getNom() . "\n";
        echo "\n";

        // Instantiate a Sheitland object with michel as rider
        $sheitland1 = new Sheitland("31", "Grey", 5, $michel);
        echo "Nouveau : " . $sheitland . "Son cavalier est : " . $michel->getNom() . "\n";
        echo "\n";

        // Instantiate a Course with a maximum of 2 commitments and 121 liters of water for the example
        $event = new Course("Grand Prix de Caen", 2, 135);

        // Add horses to the event
        $subCheval = $event->subscribeHorse($cheval);
        $subPoney = $event->subscribeHorse($poney);
        $subSheitland = $event->subscribeHorse($sheitland);
        $subSheitland1 = $event->subscribeHorse($sheitland1);

        // Display the event -> displays the name of the event & number of participants & amount of water remaining
        echo $event;

        // EXPLICATIONS DU RESULTAT ATTENDU :

        // Le nom de l'évènement est : Grand Prix de Caen
        // Le nombre de participants est de 2, il y aura donc THEORIQUEMENT 2 annimaux non inscrits par faute de place.
        // Il y a 121 litres d'eau disponible pour l'évènement

        // Le premier animal inscrit est l'ID 10, il devrait être inscrit

        // Le second animal inscrit est l'ID 20, il ne devrait pas être inscrit car il a besoin de beaucoup trop d'eau.

        // Le troisième animal inscrit est l'ID 30, il devrait être inscrit

        // Le quatrième animal inscrit est l'ID 31, il ne devrait pas être inscrit car il n'y a plus de place,
            // mais aurait pu l'être s'il y avait eu plus de place car il y aurait eu assez d'eau pour lui.

        // Il y aura donc normalement 2 animaux inscrits et 2 animaux non inscrits

        // Il restera normalement 15L d'eau à la fin (135 - (100 - 20) = 15)

        // EXECUTER LE FICHIER "app.php" POUR VERIFIER LE RESULTAT ATTENDU

    }
}