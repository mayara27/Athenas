<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnderecoCliente extends Model
{
    protected $table = 'enderecos_clientes';

    public $timestamps = false;
    
    protected $primaryKey = 'id_cliente';
    protected $fillable = [  
        'rua',
        'numero',
        'bairro',
        'cep',
        'cidade',
        'estado',
        'id_cliente'
    ];

}
