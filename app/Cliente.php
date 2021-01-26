<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'id_cliente';

    public $timestamps = false;
    protected $fillable = [    
        'nome',
        'cpf',
        'setor',
        'telefone',
        'email'
    ];
}
