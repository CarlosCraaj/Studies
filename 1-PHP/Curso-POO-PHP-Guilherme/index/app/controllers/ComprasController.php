<?php
namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

use App\models\Compra;

class ComprasController extends Controlle
{
    

    public function index(ServerRequestInterface $request, ResponseInterface $response)
    {
        $modelo = Compra::all();
    
        $this->modelo = $modelo;

        return $this->view('compras/index', $response);
    }

    public function detalhe(ServerRequestInterface $request, ResponseInterface $response)
    {
        $id = $request->getAttribute('id');
        $modelo = Compra::find($id);
        $this->modelo = $modelo;

        return $this->view('compras/show', $response);
    }
    
    public function adicionar(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view('compras/create', $response);
    }
    
    public function salvar(ServerRequestInterface $request, ResponseInterface $response)
    {
        $dados = $request->getParsedBody();
        $modelo = new Compra;
        
        $modelo->titulo = $dados['titulo'];
        $modelo->desc = $dados['desc'];
        $objModelo = $modelo->save();

        if($objModelo){
            //sucesso
        }else{
            //erro
        }

        return $response->withRedirect('/compras');
    }


    public function editar(ServerRequestInterface $request, ResponseInterface $response)
    {
        $id = $request->getAttribute('id');
        $modelo = Compra::find($id);
        $this->modelo = $modelo;

        return $this->view('compras/edit', $response);
    }
    
    public function atualizar(ServerRequestInterface $request, ResponseInterface $response)
    {
        $dados = $request->getParsedBody();
        $id = $request->getAttribute('id');
        $modelo = Compra::find($id);

        // $compra = new Compra;
        
        $modelo->titulo = $dados['titulo'];
        $modelo->desc = $dados['desc'];
        $objModelo = $modelo->save();

        return $response->withRedirect('/compras');
    }
    
    public function deletar(ServerRequestInterface $request, ResponseInterface $response)
    {
        $id = $request->getAttribute('id');
        $modelo = Compra::find($id);
        
        $ok = $modelo->delete();

        return $response->withRedirect('/compras');
    }

}