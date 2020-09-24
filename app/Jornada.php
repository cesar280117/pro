<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    protected $fillable = [
        'turno',
        'hora_inicial',
        'hora_final',
        'jornada',
        'id_empresa'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
