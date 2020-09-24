<?php

namespace App\Http\Livewire\Empleados;

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
        $empleados = DB::table('empleados')
            ->where('empleados.id_empresa', $this->id_empresa)
            ->where('empleados.id', 'like', '%' . $this->busqueda . '%')
            ->join('jornadas','empleados.id_jornada','=','jornadas.id')
            ->select(
                'empleados.*',
                'jornadas.jornada'
            )
            ->paginate(30);

        return view('livewire.empleados.index', ['empleados' => $empleados]);
    }
}
