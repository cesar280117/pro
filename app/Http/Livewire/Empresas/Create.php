<?php

namespace App\Http\Livewire\Empresas;

use App\Empresa;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;


    //datos de la empresa
    public $id_empresa;
    public $rfc;
    public $nombre_empresa;
    public $contribuyente;
    public $domicilio;
    public $telefono;
    public $giro_actividad;
    public $concepto_general;
    public $ims;
    public $curp;
    public $registro1;
    public $no_registro1;
    public $registro2;
    public $no_registro2;
    public $registro3;
    public $no_registro3;
    public $logo_empresa;
    public $logo_temporal;
    public $db;
    public $email;
    public $password;
    public $confirmar_password;

    public function render()
    {
        return view('livewire.empresas.create');
    }

    public function store()
    {
        $datos = $this->validate([
            'rfc' => 'required|string|max:13|unique:mysql2.empresas,rfc',
            'nombre_empresa' => 'required|string|max:255|unique:mysql2.empresas,nombre_empresa',
            'logo_empresa'=>'nullable|image',
            'contribuyente' => 'string|required|max:255',
            'domicilio' => 'required|string|max:255',
            'telefono' => 'string|max:14|required|unique:mysql2.empresas,telefono',
            'giro_actividad' => 'string|max:255|required',
            'concepto_general' => 'string|max:2000|required|unique:mysql2.empresas,concepto_general',
            'ims' => 'required|numeric',
            'curp' => 'nullable|string|max:18|unique:mysql2.empresas,curp',
            'registro1' => 'nullable|string|max:255',
            'no_registro1' => 'nullable|numeric',
            'registro2' => 'nullable|string|max:255',
            'no_registro2' => 'nullable|numeric',
            'registro3' => 'nullable|string|max:255',
            'no_registro3' => 'nullable|numeric',
            'password' => 'required|string|min:6',
            'email' => 'required|unique:mysql2.sucursales,email|unique:mysql2.empresas,email',
            'confirmar_password' => 'same:password'

        ]);
        if ($this->logo_empresa) {
            $datos['logo_empresa'] = $this->logo_empresa->store('images/empresas', 'public');
        } else {
            $datos['logo_empresa'] = 'images/empresas/default.png';
        }
        $datos['password'] = Hash::make($datos['password']);
        $datos['id'] = trim($datos['rfc']);
        $datos['db'] = trim($datos['rfc']);

        Empresa::create($datos);
        session()->flash('status', 'Se registro con exito la empresa, dicha empresa ya lista para su funcionamiento');
        return redirect(route('empresas.index'));
    }
}
