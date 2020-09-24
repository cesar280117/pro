<?php

namespace App\Http\Livewire\EmpleadosPortal;

use App\Guia1;
use App\Guia2;
use App\Guia3;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Guias extends Component
{

    public $id_empleado;
    public $guia1;
    public $guia2;
    public $guia3;

    public function mount()
    {
        $this->id_empleado=Auth::user()->id;
    }
    public function render()
    {
        $this->guia1 = Guia1::where('id_empleado', $this->id_empleado)->count();
        $this->guia2 = Guia2::where('id_empleado', $this->id_empleado)->count();
        $this->guia3 = Guia3::where('id_empleado', $this->id_empleado)->count();
        return view('livewire.empleados-portal.guias');
    }
}
