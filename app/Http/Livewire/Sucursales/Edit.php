<?php

namespace App\Http\Livewire\Sucursales;

use App\Sucursal;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
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
        $sucursal = Sucursal::find($id);
        $this->id_sucursal = $sucursal->id;
        $this->nombre_sucursal = $sucursal->nombre_sucursal;
        $this->contribuyente = $sucursal->contribuyente;
        $this->domicilio = $sucursal->domicilio;
        $this->telefono = $sucursal->telefono;
        $this->giro_actividad = $sucursal->giro_actividad;
        $this->concepto_general = $sucursal->concepto_general;
        $this->ims = $sucursal->ims;
        $this->curp = $sucursal->curp;
        $this->registro1 = $sucursal->registro1;
        $this->no_registro1 = $sucursal->no_registro1;
        $this->registro2 = $sucursal->registro2;
        $this->no_registro2 = $sucursal->no_registro2;
        $this->registro3 = $sucursal->registro3;
        $this->no_registro3 = $sucursal->no_registro3;
        $this->logo_temporal = $sucursal->logo_sucursal;
        $this->email = $sucursal->email;
    }
    public function render()
    {
        return view('livewire.sucursales.edit');
    }
    public function update()
    {
        $sucursal = Sucursal::find($this->id_sucursal);
        $datos = $this->validate([
            'nombre_sucursal' => 'required|string|max:255|unique:mysql2.sucursales,nombre_sucursal,' . $this->id_sucursal,
            'logo_sucursal' => 'nullable|image',
            'contribuyente' => 'string|required|max:255',
            'domicilio' => 'required|string|max:255',
            'telefono' => 'string|max:14|required|unique:mysql2.sucursales,telefono,' . $this->id_sucursal,
            'giro_actividad' => 'string|max:255|required',
            'concepto_general' => 'string|max:2000|required|unique:mysql2.sucursales,concepto_general,' . $this->id_sucursal,
            'ims' => 'required|numeric',
            'curp' => 'nullable|string|max:18|unique:mysql2.sucursales,curp,' . $this->id_sucursal,
            'registro1' => 'nullable|string|max:255',
            'no_registro1' => 'nullable|numeric',
            'registro2' => 'nullable|string|max:255',
            'no_registro2' => 'nullable|numeric',
            'registro3' => 'nullable|string|max:255',
            'no_registro3' => 'nullable|numeric',
            'password' => 'nullable|string|min:6',
            'email' => 'required|unique:mysql2.empresas,email|unique:mysql2.sucursales,email,' . $this->id_sucursal,
            'confirmar_password' => 'same:password'

        ]);
        if ($this->logo_sucursal) {
            if ($sucursal->logo_sucursal != 'images/sucursales/default.png') {
                unlink(base_path() . '/storage/app/public/' . $sucursal->logo_sucursal);
            }
            $datos['logo_sucursal'] = $this->logo_sucursal->store('images/sucursales', 'public');
        } else {
            $datos['logo_sucursal'] = $sucursal->logo_sucursal;
        }
        if ($this->password) {
            $datos['password'] = Hash::make($datos['password']);
        } else {
            $datos['password'] = $sucursal->password;
        }

        $sucursal->update($datos);
        session()->flash('status', 'Se modificaron con exito los datos de la sucursal.');
        return redirect(route('empresas.index'));
    }
}
