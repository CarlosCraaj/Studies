<?php

require '../bootstrap.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;

$app = new App;

$app->get('/', function (ServerRequestInterface $request, ResponseInterface $response) {
    // Use the PSR-7 $request object

    $compras = [
        ["titulo"=>"Carvão", "desc"=>"5kg"],
        ["titulo"=>"Arroz", "desc"=>"1kg"]
    ];

    $listaHTML = '';

    foreach ($compras as $key => $value) {
        $listaHTML .='<li>'.$value["titulo"].' - '.$value["desc"].'</li>';
    }

    $pagina = '<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Principal</title>
        </head>
        <body>
            <h2>Essa é a página principal</h2>
            <p>Lista de Compras</p>
            <ul>'.$listaHTML.'</ul>
        </body>
    </html>';

    $response->getBody()->write($pagina);
    return $response;
});
$app->run();