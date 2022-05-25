<?php 
namespace App\controllers;
use Psr\Http\Message\ResponseInterface;

class Controlle
{
    public function view(String $view, ResponseInterface $response):ResponseInterface
    {
        $pagina = include '../app/views/'.$view.'.php';

        $response->getBody()->getContents($pagina);
        return $response;
    }
}