<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    public $timestamps = false;
    protected $primaryKey = 'id_cliente';
    protected $fillable = [    
        'nome',
        'cpf',
        'setor',
        'telefone',
        'email'
    ];
}
