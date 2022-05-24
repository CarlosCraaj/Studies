<?php

require __DIR__ . '/vendor/autoload.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;

$app = new App;

$app->get('/home', function (ServerRequestInterface $request, ResponseInterface $response) {
    // Use the PSR-7 $request object

    return $response;
});
$app->run();