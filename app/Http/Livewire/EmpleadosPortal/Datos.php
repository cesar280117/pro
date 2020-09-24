<?php

namespace App\Http\Livewire\EmpleadosPortal;

use App\Empleado;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Datos extends Component
{
    public function mount()
    {
        $this->id_empleado = Auth::user()->id;
    }
    public function render()
    {
        $empleado = Empleado::find($this->id_empleado);
        return view('livewire.empleados-portal.datos', ['empleado' => $empleado]);
    }
}
