<?php

namespace App\Http\Livewire\Jornadas;

use App\Jornada;
use Livewire\Component;

class Confirmar extends Component
{
    public $id_jornada;
    public function mount($id)
    {
        $this->id_jornada = $id;
    }
    public function render()
    {
        return view('livewire.jornadas.confirmar');
    }
    public function destroy()
    {
        Jornada::destroy($this->id_jornada);
        session()->flash('status', 'Se elimino con exito la jornada laboral.');
        return redirect(route('jornadas.index'));
    }
}
