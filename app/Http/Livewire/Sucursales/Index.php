<?php

namespace App\Http\Livewire\Sucursales;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $busqueda;
    public $id_empresa;
    public function mount()
    {
        $this->id_empresa = Auth::user()->id;
    }
    public function render()
    {

        $sucursales = DB::connection('mysql2')->table('sucursales')
        ->where('sucursales.id_empresa',$this->id_empresa)
            ->where('sucursales.nombre_sucursal', 'like', '%' . $this->busqueda . '%')
            ->join('empresas', 'sucursales.id_empresa', '=', 'empresas.id')
            ->select(
                'sucursales.*',
                'empresas.nombre_empresa',
                'empresas.logo_empresa'
            )
            ->orderBy('created_at', 'asc')
            ->paginate(12);
        return view('livewire.sucursales.index', ['sucursales' => $sucursales]);
    }
}
