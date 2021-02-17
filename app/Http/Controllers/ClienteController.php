<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\EnderecoCliente;
use App\Chamado;
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

    public function show(){
        $clientes = Cliente::all();
        return view('cliente.show', compact('clientes'));
    }

    public function destroy($id)
    {
        $chamado = Chamado::where('id_cliente',$id);
        $chamado->delete();

        $endereco = EnderecoCliente::where('id_cliente',$id);
        $endereco->delete();

        $cliente = Cliente::where('id_cliente',$id);
        $cliente->delete();

        return redirect('cliente/show')->with('success', 'Dados de Cliente removido com sucesso!');
    }

    public function edit($id)
    {
        $cliente = Cliente::where('id_cliente', $id)->first();
        $endereco = EnderecoCliente::where('id_cliente', $id)->first();
        return view('cliente.update', compact('cliente', 'endereco'));
    }

    public function update(Request $request)
    {   /* $book->update($request->all());*/
    #dd($request->input());
        $cliente =  Cliente::find($request->id_cliente);
        #$cliente = Cliente::where('id_cliente', $request->id_cliente)->first();
        echo $cliente;
        $cliente->nome_cliente = $request->nome_cliente;
        $cliente->cpf = $request->cpf_cliente;
        $cliente->email = $request->email_cliente;
        $cliente->setor = $request->setor;
        $cliente->telefone = $request->tel_cliente;

        $cliente->save();

        $endereco = EnderecoCliente::where('id_cliente',$cliente->id_cliente)->first();
       
        $endereco->rua = $request->rua;
        $endereco->num = $request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->cep = $request->cep;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->id_cliente = $cliente->id_cliente;
        
        $endereco->save();

        return redirect()->route('cliente.show');
        
    }

}