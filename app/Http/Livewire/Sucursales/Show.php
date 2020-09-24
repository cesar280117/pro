<?php

namespace App\Http\Livewire\Sucursales;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Show extends Component
{
    public $id_sucursal;
    public function mount($id)
    {
        $this->id_sucursal = $id;
    }
    public function render()
    {
        $sucursal = DB::connection('mysql2')
            ->table('sucursales')
            ->where('sucursales.id', $this->id_sucursal)
            ->join('empresas', 'sucursales.id_empresa', '=', 'empresas.id')
            ->select(
                'sucursales.*',
                'empresas.nombre_empresa',
                'empresas.logo_empresa',
                'empresas.rfc'
            )
            ->first();
        return view('livewire.sucursales.show', ['sucursal' => $sucursal]);
    }
}
