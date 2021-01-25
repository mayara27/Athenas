<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Endereco;
class UsuarioController extends Controller
{
   

    public function create()
    {
    	return view('usuario.create');
    }

    public function store(Request $request)
    { 
        $senha = 'user123';
        $usuario = new Usuario;

        $usuario->nome_usuario = $request->nome;
        $usuario->cpf = $request->cpf;
        $usuario->email = $request->email;
        $usuario->login = $request-> emaillogin;
        $usuario->senha = $senha; #usuario deve alterar no primeiro login
        $usuario->nascimento_usuario = $request->nascimento;
        $usuario->telefone = $request->telefone;
        $usuario->tel_contato_usuario = $request->telefone2;
        $usuario->estado_civil_usuario = $request->estado_civil;
        $usuario->escolaridade = $request->escolaridade;
        $usuario->filhos_usuario = $request->filhos;
        $usuario->nivel_acesso = $request->tipo_usuario;
        $usuario->cargo = $request->setor;
        
        $usuario->save();

        $endereco = new Endereco;

        $endereco->rua = $request->rua;
        $endereco->num = $request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->cep = $request->cep;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->id_usuario = $usuario->id;
  
        
        $endereco->save();

        return redirect()->to('/');
        
        
    }
}
