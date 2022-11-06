<?php

// Autoloading, pas besoin de require partout pour charger nos classes et chargement
// automatique de nos librairies

require_once('../vendor/autoload.php');

// Définitions de chemins utiles dans l'application
define('TEMPLATES_DIR', __DIR__ . '/../templates/');
define('SRC_DIR', __DIR__ . '/');
define('PUBLIC_DIR', __DIR__ . '/../public/');


use App\Controller\Main;

/*use App\Model\Manager;
use App\Model\Stable;*/

$prgm = new Main();
$prgm->execute();