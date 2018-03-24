<?php 

require '../config/config.php';
require '../autoload.php';

session_start();

use Lib\FrontController\FrontController;

$app = new FrontController();

$app->setRoutes(require('../route/routes.php'));
$app->run();