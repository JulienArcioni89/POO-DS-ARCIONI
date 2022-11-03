<?php

// Autoloading, pas besoin de require partout pour charger nos classes et chargement
// automatique de nos librairies


require_once('../vendor/autoload.php');

// Définitions de chemins utiles dans l'application
define('TEMPLATES_DIR', __DIR__ . '/../templates/');
define('SRC_DIR', __DIR__ . '/');
define('PUBLIC_DIR', __DIR__ . '/../public/');

use App\Model\Horse;
use App\Model\Manager;
use App\Model\Stable;

// On instancie un objet Manager et un objet Stable
$manager1 = new Manager("Jean", "Rue des Tilleuls", "Caen", "14000", "France");
$ecurie1 = new Stable("Ecurie de la ferme", "Rue de la ferme", "Caen", "14000", "France", $manager1);
$cheval = new Horse();
echo $ecurie1;