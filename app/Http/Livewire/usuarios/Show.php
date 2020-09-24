<?php

namespace App\Http\Livewire\usuarios;

use App\User;
use Livewire\Component;


class Show extends Component
{
    public $id_usuario;
    public $nombre;
    public $foto;
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
        return view('livewire.usuarios.show');
    }
   
}
