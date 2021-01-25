<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [    
        
        'titulo',
        'status',
        'prioridade',
        'descricao',
        'deadline',
        'id_cliente'

    ];
}