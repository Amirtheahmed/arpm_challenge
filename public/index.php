<?php
require_once '../src/Router.php';
require_once '../src/Controller/PageController.php';

use App\Controller\PageController;
use App\Router;

$router = new Router(new PageController());
$router->route($_SERVER['REQUEST_URI']);
