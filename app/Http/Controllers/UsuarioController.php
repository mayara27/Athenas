<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create()
    {
    	return view('usuario.create');
    }

    public function store(Request $request)

    {
        return $request->query('id');
        /*
        $usuario = new Usuario;

        $usuario->nome = $request->nome;
        $usuario->cpf = $request->cpf;
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->nascimento_usuario = $request->nascimento;
        $usuario->telefone_usuario = $request->telefone;
        $usuario->tel_contato_usuario = $request->telefone2;
        $usuario->estado_civil_usuario = $request->estado_civil;
        $usuario->escolaridade = $request->escolaridade;
        $usuario->filhos_usuario = $request->filhos;
        $usuario->nivel_acesso = $request->tipo_usuario;
        $usuario->cargo = $request->setor;
        $usuario->matricula = $request->id;
        
        $endereco = new Endereco;

        $endereco->rua = $request->rua;
        $endereco->numero = $request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->cep = $request->cep;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->id_usuario = $request->rua;
  
        $usuario->save();
        $endereco->save();

        return redirect()->to('/');
        */
        
    }
}
