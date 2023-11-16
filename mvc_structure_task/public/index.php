<?php
require_once '../src/Router.php';
require_once '../src/Controller/PageController.php';

use src\Controller\PageController;
use src\Router;

$router = new Router(new PageController());
$router->route($_SERVER['REQUEST_URI']);
