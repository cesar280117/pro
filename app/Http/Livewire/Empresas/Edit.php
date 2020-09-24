<?php

namespace App\Http\Livewire\Empresas;

use App\Empresa;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    //datos de la empresa
    public $id_empresa;
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


    public function mount($id)
    {
        $empresa = Empresa::find($id);
        $this->id_empresa = $empresa->id;
        $this->nombre_empresa = $empresa->nombre_empresa;
        $this->contribuyente = $empresa->contribuyente;
        $this->domicilio = $empresa->domicilio;
        $this->telefono = $empresa->telefono;
        $this->giro_actividad = $empresa->giro_actividad;
        $this->concepto_general = $empresa->concepto_general;
        $this->ims = $empresa->ims;
        $this->curp = $empresa->curp;
        $this->registro1 = $empresa->registro1;
        $this->no_registro1 = $empresa->no_registro1;
        $this->registro2 = $empresa->registro2;
        $this->no_registro2 = $empresa->no_registro2;
        $this->registro3 = $empresa->registro3;
        $this->no_registro3 = $empresa->no_registro3;
        $this->logo_temporal = $empresa->logo_empresa;
        $this->email = $empresa->email;

    
    }

    public function render()
    {

        return view('livewire.empresas.edit');
    }


    public function update()
    {
        $empresa = Empresa::find($this->id_empresa);
        $datos = $this->validate([
            'nombre_empresa' => 'required|string|max:255|unique:mysql2.empresas,nombre_empresa,' . $this->id_empresa,
            'logo_empresa' => 'nullable|image',
            'contribuyente' => 'string|required|max:255',
            'domicilio' => 'required|string|max:255',
            'telefono' => 'string|max:14|required|unique:mysql2.empresas,telefono,' . $this->id_empresa,
            'giro_actividad' => 'string|max:255|required',
            'concepto_general' => 'string|max:2000|required|unique:mysql2.empresas,concepto_general,' . $this->id_empresa,
            'ims' => 'required|numeric',
            'curp' => 'nullable|string|max:18|unique:mysql2.empresas,curp,' . $this->id_empresa,
            'registro1' => 'nullable|string|max:255',
            'no_registro1' => 'nullable|numeric',
            'registro2' => 'nullable|string|max:255',
            'no_registro2' => 'nullable|numeric',
            'registro3' => 'nullable|string|max:255',
            'no_registro3' => 'nullable|numeric',
            'password' => 'nullable|string|min:6',
            'email' => 'required|unique:mysql2.sucursales,email|unique:mysql2.empresas,email,' . $this->id_empresa,
            'confirmar_password' => 'same:password'

        ]);
        if ($this->logo_empresa) {
            if ($empresa['logo_empresa'] != 'images/empresas/default.png') {
                unlink(base_path() . '/storage/app/public/' . $empresa['logo_empresa']);
            }
            $datos['logo_empresa'] = $this->logo_empresa->store('images/empresas', 'public');
        } else {
            $datos['logo_empresa'] = $empresa['logo_empresa'];
        }

        if ($this->password) {
            $datos['password'] = Hash::make($datos['password']);
        } else {
            $datos['password'] = $empresa['password'];
        }
        $empresa->update($datos);
        session()->flash('status', 'Se modifico con exito la empresa.');
        return redirect(route('empresas.index'));
    }
}
