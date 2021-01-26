<?php

namespace App\Http\Controllers;
use App\Chamado;
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

        $chamado->save();
    }

    
}
