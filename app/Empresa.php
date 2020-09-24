<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Empresa extends Authenticatable
{
    protected $fillable = [
        'rfc',
        'id',
        'nombre_empresa',
        'contribuyente',
        'domicilio',
        'telefono',
        'giro_actividad',
        'concepto_general',
        'ims',
        'curp',
        'registro1',
        'no_registro1',
        'registro2',
        'no_registro2',
        'registro3',
        'no_registro3',
        'logo_empresa',
        'db',
        'password',
        'email'
    ];

    protected $connection = 'mysql2';
    protected $hidden = [
        'password',
        'created_at',
        'updated_at',
    ];
    protected $keyType = 'string';
    protected $incrementigs = false;
}
