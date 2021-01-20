<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Endereco;

class ClienteController extends Controller
{
    public function create()
    {
    	return view('cliente.create');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente;

        $cliente->nome_cliente = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->email = $request->email;
        $cliente->setor = $request->setor;
        $cliente->telefone = $request->telefone;

        $cliente->save();

        $endereco = new Endereco;

        $endereco->rua = $request->rua;
        $endereco->num = $request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->cep = $request->cep;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->id_usuario = $cliente->id;
  
        
        $endereco->save();

        return redirect()->to('/');
    }

}
