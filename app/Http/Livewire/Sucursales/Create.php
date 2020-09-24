<?php

namespace App\Http\Livewire\Sucursales;

use App\Sucursal;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    //datos de la sucursal
    public $id_empresa;
    public $id_sucursal;
    public $nombre_sucursal;
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
    public $logo_sucursal;
    public $logo_temporal;
    public $email;
    public $password;
    public $confirmar_password;

    use WithFileUploads;

    public function mount($id)
    {
        $this->id_empresa = $id;
    }
    public function render()
    {
        return view('livewire.sucursales.create');
    }
    public function store()
    {
        $datos = $this->validate([
            'nombre_sucursal' => 'required|string|max:255|unique:mysql2.sucursales,nombre_sucursal',
            'logo_sucursal' => 'nullable|image',
            'contribuyente' => 'string|required|max:255',
            'domicilio' => 'required|string|max:255',
            'telefono' => 'string|max:14|required|unique:mysql2.sucursales,telefono',
            'giro_actividad' => 'string|max:255|required',
            'concepto_general' => 'string|max:2000|required|unique:mysql2.sucursales,concepto_general',
            'ims' => 'required|numeric',
            'curp' => 'nullable|string|max:18|unique:mysql2.sucursales,curp',
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
        if ($this->logo_sucursal) {
            $datos['logo_sucursal'] = $this->logo_sucursal->store('images/sucursales', 'public');
        } else {
            $datos['logo_sucursal'] = 'images/sucursales/default.png';
        }
        $datos['id_empresa'] = $this->id_empresa;
        $datos['password'] = Hash::make($datos['password']);
        Sucursal::create($datos);
        session()->flash('status', 'Se registro con exito la sucursal.');
        return redirect(route('inicio'));
    }
}
