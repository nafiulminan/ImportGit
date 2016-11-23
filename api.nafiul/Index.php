<?php

require_once __DIR__.'/Autoloader.php';

use lib\MVC\Router;

$kernel = new Router($_GET);
$controller = $kernel->getController();
$controller->ExecuteAction();