<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use App\Usuario;

class HorarioController extends Controller
{
    public function index()
    { 
      $funcionarios = Usuario::all();
      $hoje = date('Y-m-d');
      $dia_atual = Horario::all();
     
      
      $horarios = Horario::where('dia','=', $hoje)->get();
      $usuarios = Usuario::all();
    	return view('horario.index', compact('horarios', 'usuarios'));
    }



    public function search(Request $request){
        $title = $_GET['pesquisa'];
        $usuarios = Usuario::where('nome_usuario','LIKE', '%' .$title. '%')->get();
        
        foreach ($usuarios as $r) {
            $horarios = Horario::where('id_usuario', '=', $r->id_usuario)->get();
        }
            
       return view('horario.index', compact('usuarios', 'horarios'));
    }

}
