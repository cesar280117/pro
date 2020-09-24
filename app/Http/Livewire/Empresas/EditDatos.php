<?php

namespace App\Http\Livewire\Empresas;

use App\Empresa;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditDatos extends Component
{
    use WithFileUploads;

    public $id_empresa;
    public $nombre_empresa;
    public $logo_empresa;
    public $logo_temporal;
    public $domicilio;
    public $telefono;
    public $email;
    public $password;
    public $confirmar_password;
    public function mount($id)
    {

        $empresa = Empresa::find($id);
        $this->id_empresa = $empresa->id;
        $this->nombre_empresa = $empresa->nombre_empresa;
        $this->logo_temporal = $empresa->logo_empresa;
        $this->domicilio = $empresa->domicilio;
        $this->telefono = $empresa->telefono;
        $this->email = $empresa->email;
    }
    public function render()
    {
        return view('livewire.empresas.edit-datos');
    }
    public function update()
    {
        $empresa = Empresa::find($this->id_empresa);
        $datos = $this->validate([
            'nombre_empresa' => 'required|max:255|string|unique:mysql2.empresas,nombre_empresa,' . $this->id_empresa,
            'logo_empresa' => 'nullable|image|max:1024',
            'domicilio' => 'string|required|max:255',
            'telefono' => 'string|required|max:15',
            'email' => 'string|max:255|required',
            'password' => 'nullable|min:6|string',
            'confirmar_password' => 'same:password'
        ]);
        if ($this->logo_empresa) {
            if ($empresa['logo_empresa'] != 'images/empresas/default.png') {
                unlink(base_path() . '/storage/app/public/' . $empresa['logo_empresa']);
            }
            $datos['logo_empresa'] = $this->logo_empresa->store('/images/empresas', 'public');
        } else {
            $datos['logo_empresa'] = $empresa['logo_empresa'];
        }
        if ($this->password) {
            $datos['password'] = Hash::make($datos['password']);
        } else {
            $datos['password'] = $empresa['password'];
        }
        $empresa->update($datos);
        session()->flash('status', 'Se modificaron con exito los datos de la empresa');
        return redirect(route('inicio'));
    }
}
