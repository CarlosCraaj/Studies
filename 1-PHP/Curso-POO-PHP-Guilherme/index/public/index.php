<?php

require '../bootstrap.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use App\controllers\ComprasController;

$app = new App;

$app->get('/', ComprasController::class . ':index');
$app->run();