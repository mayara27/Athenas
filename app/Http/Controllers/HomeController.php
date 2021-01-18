<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
class HomeController extends Controller
{
    public function index()
    {
    	return view('home.index');
    }

    public function create(){
        return view('usuario.create');
    }

    public function store(Request $request){
       return $request;
    }
}
