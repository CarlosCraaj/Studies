<?php
namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

use App\models\Usuario;

class UsuariosController extends Controlle
{
    

    public function index(ServerRequestInterface $request, ResponseInterface $response)
    {
        $modelo = Usuario::all();
    
        $this->modelo = $modelo;

        return $this->view('usuarios/index', $response);
    }

    public function detalhe(ServerRequestInterface $request, ResponseInterface $response)
    {
        $id = $request->getAttribute('id');
        $modelo = Usuario::find($id);
        $this->modelo = $modelo;

        return $this->view('usuarios/show', $response);
    }
    
    public function adicionar(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view('usuarios/create', $response);
    }
    
    public function salvar(ServerRequestInterface $request, ResponseInterface $response)
    {
        $dados = $request->getParsedBody();
        $modelo = new Usuario;
        
        $modelo->nome = $dados['nome'];
        $modelo->email = $dados['email'];
        $modelo->senha = md5($dados['senha']);
        $objModelo = $modelo->save();

        if($objModelo){
            //sucesso
        }else{
            //erro
        }

        return $response->withRedirect('/usuarios');
    }


    public function editar(ServerRequestInterface $request, ResponseInterface $response)
    {
        $id = $request->getAttribute('id');
        $modelo = Usuario::find($id);
        $this->modelo = $modelo;

        return $this->view('usuarios/edit', $response);
    }
    
    public function atualizar(ServerRequestInterface $request, ResponseInterface $response)
    {
        $dados = $request->getParsedBody();
        $id = $request->getAttribute('id');
        $modelo = Usuario::find($id);

        // $compra = new Usuario;
        
        $modelo->nome = $dados['nome'];
        $modelo->email = $dados['email'];
        if(isset($dados['senha']) && $dados['senha'] != ""){
            $modelo->senha = md5($dados['senha']);
        }
        $objModelo = $modelo->save();

        return $response->withRedirect('/usuarios');
    }
    
    public function deletar(ServerRequestInterface $request, ResponseInterface $response)
    {
        $id = $request->getAttribute('id');
        $modelo = Usuario::find($id);
        
        $ok = $modelo->delete();

        return $response->withRedirect('/usuarios');
    }

}