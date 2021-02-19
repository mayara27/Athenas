<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horarios';

    public $timestamps = false;
    
    protected $primaryKey = 'id';
    protected $fillable = [  
        'id_cliente',
        'hora_entrada',
        'hora_saida',
        'dia'
    ];
}
