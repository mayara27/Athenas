<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create()
    {
    	return view('usuario.create');
    }
}
