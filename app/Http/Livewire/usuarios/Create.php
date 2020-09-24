<?php

namespace App\Http\Livewire\usuarios;

use App\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $busqueda;

    public $id_usuario;
    public $nombre;
    public $foto;
    public $foto_temporal;
    public $email;
    public $password;
    public $confirmar_password;



    public function render()
    {
        return view('livewire.usuarios.create');
    }

    public function store()
    {

        $datos = $this->validar();
        if ($this->foto != '') {
            $datos['foto'] = $this->foto->store('images/usuarios', 'public');
        } else {
            $datos['foto'] = 'images/usuarios/default.png';
        }
        $datos['password'] = Hash::make($datos['password']);
        User::create($datos);
        session()->flash('status', 'Se creo con exito el usuario');
        return redirect(route('usuarios.index'));
    }

    private function validar($id = null)
    {
        $valida_modificado = is_null($id) ? '' : ',' . $id;
        $validar_password = is_null($id) ? 'required|min:6' : 'nullable|min:6';
        $datos = $this->validate([
            'nombre' => 'string|max:255|required',
            'foto' => 'nullable|image|max:1000',
            'email' => 'email|max:255|unique:mysql2.users,email' . $valida_modificado,
            'password' => $validar_password,
            'confirmar_password' => 'same:password'
        ]);
        return $datos;
    }
}
