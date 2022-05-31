<?php
namespace App\controllers;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

use App\models\Compra;

class ComprasController extends Controlle
{
    

    public function index(ServerRequestInterface $request, ResponseInterface $response)
    {
        $compras = Compra::all();
    
        $this->compras = $compras;

        return $this->view('compras/index', $response);
    }

    public function detalhe(ServerRequestInterface $request, ResponseInterface $response)
    {
        $id = $request->getAttribute('id');
        $compra = Compra::find($id);
        $this->compra = $compra;

        return $this->view('compras/show', $response);
    }
    
    public function adicionar(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view('compras/create', $response);
    }
    
    public function salvar(ServerRequestInterface $request, ResponseInterface $response)
    {
        $dados = $request->getParsedBody();
        $compra = new Compra;
        $compra->titulo = $dados['titulo'];
        $compra->desc = $dados['desc'];
        $idCompra = $compra->save();

        if($idCompra){
            //sucesso
        }else{
            //erro
        }

        return $response->withRedirect('/compras');
    }


    public function editar(ServerRequestInterface $request, ResponseInterface $response)
    {
        $id = $request->getAttribute('id');
        $compra = Compra::find($id);
        $this->compra = $compra;

        return $this->view('compras/edit', $response);
    }
    
    public function atualizar(ServerRequestInterface $request, ResponseInterface $response)
    {
        $dados = $request->getParsedBody();
        var_dump($dados);exit;

        // $compra = new Compra;
        
        $compra->titulo = $dados['titulo'];
        $compra->desc = $dados['desc'];
        $idCompra = $compra->save();

        if($idCompra){
            //sucesso
        }else{
            //erro
        }

        return $response->withRedirect('/compras');
    }

}