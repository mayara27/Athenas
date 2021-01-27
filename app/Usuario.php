<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    
    public $timestamps = false;
    protected $fillable = [    
        
        'nome',
        'cpf',
        'cargo',
        'email',
        'telefone_usuario',
        'tel_contato_usuario',
        'login',
        'senha_usuario',
        'nivel_acesso',
        'filhos_usuario',
        'nascimento_usuario',
        'escolaridade',
        'estado_civil_usuario'

    ];
}
