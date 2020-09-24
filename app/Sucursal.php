<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Sucursal extends Authenticatable
{
    protected $table = 'sucursales';
    protected $fillable = [
        'id_empresa',
        'nombre_sucursal',
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
        'logo_sucursal',
        'password',
        'email'
    ];



    protected $hidden = [
        'password',
        'created_at',
        'updated_at',
    ];

    protected $connection = 'mysql2';
}
