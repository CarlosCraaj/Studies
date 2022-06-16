<?php

require '../bootstrap.php';

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\App;
use App\controllers\ComprasController;
use App\controllers\UsuariosController;
use App\controllers\AuthController;

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

$app->get('/usuarios', UsuariosController::class . ':index');
$app->get('/usuarios/detalhe/{id}', UsuariosController::class . ':detalhe');
$app->get('/usuarios/adicionar', UsuariosController::class . ':adicionar');
$app->post('/usuarios', UsuariosController::class . ':salvar');
$app->get('/usuarios/editar/{id}', UsuariosController::class . ':editar');
$app->put('/usuarios/{id}', UsuariosController::class . ':atualizar');
$app->delete('/usuarios/deletar/{id}', UsuariosController::class . ':deletar');

$app->get('/login', AuthController::class . ':index');
$app->post('/login', AuthController::class . ':entrar');
$app->get('/logout', AuthController::class . ':sair');

$app->run();