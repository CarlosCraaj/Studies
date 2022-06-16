<?php
namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

use App\Models\Auth;

class AuthController extends Controlle
{

    public function index(ServerRequestInterface $request, ResponseInterface $response)
    {

        return $this->view('auth/login', $response);
    }
    
    public function entrar(ServerRequestInterface $request, ResponseInterface $response)
    {
        $dados = $request->getParsedBody();
        if (Auth::login($dados['email'], $dados['senha'])) {
            // Logado
            return $response->withRedirect('/compras');
        }else {
            // não está logado
            return $response->withRedirect('/');
        }

    }
    
    public function sair(ServerRequestInterface $request, ResponseInterface $response)
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);

        return $response->withRedirect('/');

    }




}