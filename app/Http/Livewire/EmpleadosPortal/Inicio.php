<?php

namespace App\Http\Livewire\EmpleadosPortal;

use App\Guia1;
use App\Guia2;
use App\Guia3;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Inicio extends Component
{
    public $id_empleado;
    public $resultado;

    public function mount()
    {
        $this->id_empleado = Auth::user()->id;
    }
    public function render()
    {
        $guia1 = Guia1::where('id_empleado', $this->id_empleado)->count();
        $guia2 = Guia2::where('id_empleado', $this->id_empleado)->count();
        $guia3 = Guia3::where('id_empleado', $this->id_empleado)->count();

        $total_guias = $guia1 + $guia2 + $guia3;
        $this->resultado = round($total_guias * 100 / 3);


        return view('livewire.empleados-portal.inicio');
    }
}
