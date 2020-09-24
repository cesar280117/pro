<?php

namespace App\Http\Livewire\usuarios;

use App\User;
use Livewire\Component;


class Confirm extends Component
{

    public $id_usuario;
    public $nombre;
    public $foto_temporal;
    public $email;
   

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
        return view('livewire.usuarios.confirmar');
    }
    
    public function destroy()
    {
        $usuario = User::find($this->id_usuario);
        if ($usuario['foto'] != 'images/usuarios/default.png') {
            unlink(base_path() . '/storage/app/public/' . $usuario->foto);
        }
        $usuario->delete();
        session()->flash('status', 'Se elimino con exito el usuario');
        return redirect(route('usuarios.index'));

    }
}

