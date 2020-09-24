<?php

namespace App\Http\Livewire\Empleados;

use App\Empleado;
use Livewire\Component;

class Confirmar extends Component
{
    public $id_empleado;
    public function mount($id)
    {
        $this->id_empleado = $id;
    }
    public function render()
    {
        return view('livewire.empleados.confirmar');
    }
    public function destroy()
    {
        $empleado = Empleado::find($this->id_empleado);
        if ($empleado['foto_empleado'] != 'images/empleados/default.png') {
            unlink(base_path() . '/storage/app/public/' . $empleado['foto_empleado']);
        }
        $empleado->delete();
        session()->flash('status', 'Se elimino con exito el empleado');
        return redirect(route('empleados.index'));
    }
}
