<?php

namespace App\Http\Livewire\usuarios;

use App\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $id_usuario;
    public $nombre;
    public $foto;
    public $foto_temporal;
    public $email;
    public $password;
    public $confirmar_password;

    public function mount($id)
    {
        $usuario = User::find($id);
        $this->nombre = $usuario->nombre;
        $this->id_usuario = $usuario->id;
        $this->foto_temporal = $usuario->foto;
        $this->email = $usuario->email;
    }

    public function render()
    {
        return view('livewire.usuarios.edit');
    }

    public function update()
    {
        $usuario = User::find($this->id_usuario);
        $datos = $this->validar();
        if ($this->foto != '') {
            if ($usuario['foto'] != 'images/usuarios/default.png') {
                unlink(base_path() . '/storage/app/public/' . $usuario->foto);
            }
            $datos['foto'] = $this->foto->store('images/usuarios', 'public');
        } else {
            $datos['foto'] = $usuario['foto'];
        }
        if ($this->password == '') {
            $datos['password'] = $usuario['password'];
        } else {
            $datos['password'] = Hash::make($datos['password']);
        }
        $usuario->update($datos);
        session()->flash('status', 'Se modifico con exito el usuario');
        return redirect(route('usuarios.index'));
    }




    private function validar()
    {
        $datos = $this->validate([
            'nombre' => 'string|max:255|required',
            'foto' => 'nullable|image|max:1000',
            'email' => 'email|max:255|unique:mysql2.users,email,' . $this->id_usuario,
            'password' => 'nullable|min:6',
            'confirmar_password' => 'same:password'
        ]);
        return $datos;
    }
}
