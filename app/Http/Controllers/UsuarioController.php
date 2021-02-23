<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Endereco;
class UsuarioController extends Controller
{
    public function __construct()
	{
	    $this->middleware('auth');
	}

    public function create()
    {
    	return view('usuario.create');
    }

    public function info(Request $request){
        $usuario = Usuario::find($request->id);
        $endereco = Endereco::where('id_usuario', $usuario->id_usuario)->first();
        return view('usuario.info', compact( 'usuario','endereco'));
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
        $endereco->id_usuario = $usuario->id_usuario;
  
        
        $endereco->save();

        return redirect('usuario/show');
    }

    public function show(){
        $usuarios = Usuario::all();
        return view('usuario.show', compact('usuarios'));
    }

    public function destroy($id)
    {
      
        $endereco = Endereco::where('id_usuario',$id);
        $endereco->delete();

        $usuario = Usuario::where('id_usuario', $id);
        $usuario->delete();

        return redirect('usuario/show')->with('success', 'Dados do Funcionário removido com sucesso!');
    }

    public function edit($id)
    {
        $usuario = Usuario::where('id_usuario', $id)->first();
        $endereco = Endereco::where('id_usuario', $id)->first();
        return view('usuario.update', compact('usuario', 'endereco'));
    }

    public function update(Request $request)
    {  
        #dd($request->input());
        $usuario =  Usuario::find($request->id_usuario);
        $senha =  $usuario->senha;
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
        $usuario->senha = $senha;
        
        $usuario->save();

        $endereco = Endereco::where('id_usuario', $usuario->id_usuario)->first();
        $endereco->rua = $request->rua;
        $endereco->num = $request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->cep = $request->cep;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
  
        
        $endereco->save();

        return redirect()->route('usuario.show');
        
    }


}
