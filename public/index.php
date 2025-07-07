<?php

require_once __DIR__. '/../vendor/autoload.php';

use App\Http\Router;

$router = new Router();
$router->dispatch();