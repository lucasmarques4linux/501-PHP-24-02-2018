<?php 

require '../config/config.php';
require '../autoload.php';

use Lib\FrontController\FrontController;

$app = new FrontController();

$app->setRoutes(require('../route/routes.php'));
$app->run();