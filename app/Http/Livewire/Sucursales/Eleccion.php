<?php

namespace App\Http\Livewire\Sucursales;

use App\Empresa;
use Livewire\Component;

class Eleccion extends Component
{
    public $busqueda;
    public function render()
    {
        $empresas = Empresa::where('id', 'like', '%' . $this->busqueda . '%')
            ->orwhere('nombre_empresa', 'like', '%' . $this->busqueda . '%')
            ->paginate(12);
        return view('livewire.sucursales.eleccion', ['empresas' => $empresas]);
    }
}
