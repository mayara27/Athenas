<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public $timestamps = false;
    protected $fillable = [  
        'rua',
        'numero',
        'bairro',
        'cep',
        'cidade',
        'estado',
        'id_usuario'
    ];

}
