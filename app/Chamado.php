<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    protected $primaryKey = 'id_chamado';
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