<?php

// Autoloading

require_once('../vendor/autoload.php');

// Définitions de chemins utiles dans l'application
define('TEMPLATES_DIR', __DIR__ . '/../templates/');
define('SRC_DIR', __DIR__ . '/');
define('PUBLIC_DIR', __DIR__ . '/../public/');


use App\Controller\Main;

// Start of the application
$prgm = new Main();
$prgm->execute();