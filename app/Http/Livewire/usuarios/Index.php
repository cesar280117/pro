<?php

namespace App\Http\Livewire\usuarios;

use App\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
 
    public $busqueda;
    public function render()
    {
        $usuarios = User::where('id', 'like', '%' . $this->busqueda . '%')
            ->orwhere('nombre', 'like', '%' . $this->busqueda . '%')
            ->paginate(10);
        return view('livewire.usuarios.index', ['usuarios' => $usuarios]);
    }
   
   
  
}
