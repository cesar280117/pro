<?php

namespace App\Http\Livewire\Empleados;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Show extends Component
{
    public $id_empleado;
    public function mount($id)
    {
        $this->id_empleado = $id;
    }
    public function render()
    {
        $empleado = DB::table('empleados')
            ->where('empleados.id', $this->id_empleado)
            ->join('jornadas', 'empleados.id_jornada', '=', 'jornadas.id')
            ->select(
                'empleados.*',
                'jornadas.jornada'
            )
            ->first();
        return view('livewire.empleados.show',['empleado'=>$empleado]);
    }
}
