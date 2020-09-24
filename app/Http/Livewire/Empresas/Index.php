<?php

namespace App\Http\Livewire\Empresas;

use App\Empresa;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $busqueda;

   
    public function render()
    {
        $empresas = Empresa::where('id', 'like', '%' . $this->busqueda . '%')
            ->orwhere('nombre_empresa', 'like', '%' . $this->busqueda . '%')
            ->orwhere('giro_actividad', 'like', '%' . $this->busqueda . '%')
            ->orwhere('contribuyente', 'like', '%' . $this->busqueda . '%')

            ->paginate(9);


        return view('livewire.empresas.index', ['empresas' => $empresas]);
    }

}
