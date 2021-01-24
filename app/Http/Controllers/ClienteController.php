<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\EnderecoCliente;

class ClienteController extends Controller
{
    public function create()
    {
    	return view('cliente.create');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente;

        $cliente->nome_cliente = $request->nome_cliente;
        $cliente->cpf = $request->cpf_cliente;
        $cliente->email = $request->email_cliente;
        $cliente->setor = $request->setor;
        $cliente->telefone = $request->tel_cliente;

        $cliente->save();

        $endereco = new EnderecoCliente;

        $endereco->rua = $request->rua;
        $endereco->num = $request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->cep = $request->cep;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->id_cliente = $cliente->id;
  
        
        $endereco->save();

        return redirect()->to('/');
    }

}
