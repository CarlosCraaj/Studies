<?php

require '../bootstrap.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use App\controllers\ComprasController;

// $app = new App;

$app = new App([

    'settings'=> [
        'displayErrorDetails'   => true,
        'debug'                 => true,
        'whoops.editor'         => 'code',
    ]
    
]);

$app->get('/', ComprasController::class . ':index');
$app->get('/compras', ComprasController::class . ':index');
$app->get('/compras/detalhe/{id}', ComprasController::class . ':detalhe');
$app->get('/compras/adicionar', ComprasController::class . ':adicionar');
$app->post('/compras', ComprasController::class . ':salvar');
$app->get('/compras/editar/{id}', ComprasController::class . ':editar');
$app->put('/compras/{id}', ComprasController::class . ':atualizar');
$app->delete('/compras/deletar/{id}', ComprasController::class . ':deletar');


$app->run();