<?php

namespace App\Http\Controllers;
use App\Chamado;
use App\Cliente;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{

    public function create()
    {
    	return view('chamado.create');
    }

    public function store(Request $request)
    {
        $chamado = new Chamado;

        $chamado->titulo = $request->titulo;
        $chamado->status = 'ativo';
        $chamado->prioridade = $request->prioridade;
        $chamado->descricao = $request->descricao;
        $chamado->id_cliente = $request->id_cliente;
        $chamado->deadline = $request->deadline;

        $chamado->save();
        return redirect('chamado/show');
    }

    public function show(){
        $chamados = Chamado::all();
        $total = Chamado::where('status','=','ativo')->count();
        $totalInativo = Chamado::where('status','=','inativo')->count();

        $hoje = date('Y/m/d');
        $encerraHoje = Chamado::where('deadline','=',$hoje)->count();

        $atrasado = Chamado::where('deadline','<',$hoje)->where('status','=','ativo')->count();

        $concluidos = Chamado::where('status','=','inativo')->count();

        return view('chamado.show', compact('chamados','total', 'totalInativo','encerraHoje','atrasado','concluidos'));
    }  
    
    public function info(Request $request){
        $chamado = Chamado::find($request->id);
        $cliente = Cliente::where('id_cliente', $chamado->id_cliente)->first();
        return view('chamado.info', compact('chamado', 'cliente'));
    }

    public function concluir(Request $request)
    { 
        $chamado = Chamado::find($request->id);
        $chamado->status = 'inativo';

        $chamado->save();
        return redirect('chamado/show');
    }
}