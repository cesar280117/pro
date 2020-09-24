<?php

namespace App\Http\Livewire\Empresas;

use App\Empresa;
use App\Sucursal;
use Livewire\Component;

class Show extends Component
{
    public $id_empresa;

    public function mount($id)
    {
        $this->id_empresa = $id;
    }

    public function render()
    {
        $sucursales = Sucursal::where('id_empresa', $this->id_empresa)
            ->orderBy('created_at', 'asc')
            ->get();
        $empresa = Empresa::find($this->id_empresa);
        return view('livewire.empresas.show', ['empresa' => $empresa, 'sucursales' => $sucursales]);
    }
}
