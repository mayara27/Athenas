<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    public function create()
    {
    	return view('chamado.create');
    }

    public function store(Request $request)
    {
        return $request;
    }

}
