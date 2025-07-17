<?php

require_once '../vendor/autoload.php';

require_once '../app/config/boostrap.php';

require_once '../routes/routes.web.php';

use App\Controlleur\CompteControlleur;

use App\Core\Router;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


Router::resolve($routes);

