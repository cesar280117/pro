<?php

namespace App\Http\Livewire\Jornadas;

use App\Jornada;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Edit extends Component
{
    public $id_jornada;
    public $turno;
    public $hora_inicial;
    public $hora_final;
    public $jornada;

    public $id_empresa;

    public function mount($id)
    {
        $jornada = Jornada::find($id);
        $this->id_empresa = Auth::user()->id;
        $this->id_jornada = $jornada->id;
        $this->turno = $jornada->turno;
        $this->hora_inicial = $jornada->hora_inicial;
        $this->hora_final = $jornada->hora_final;
        $this->jornada = $jornada->jornada;
    }
    public function render()
    {
        return view('livewire.jornadas.edit');
    }

    public function update()
    {
        $jornada = Jornada::find($this->id_jornada);
        $this->jornada = 'fijo ' . $this->turno . ' entre las ' . $this->hora_inicial . ' y ' . $this->hora_final . ' hrs ';
        $datos = $this->validate([
            'turno' => 'required|string|max:255',
            'hora_inicial' => 'required|max:255',
            'hora_final' => 'required|max:255',
            'jornada' => 'unique:jornadas,jornada,'.$this->id_jornada
        ]);
        $datos['id_empresa'] = $this->id_empresa;
        $jornada->update($datos);
        session()->flash('status', 'Se modifico con exito la jornada laboral.');
        return redirect(route('jornadas.index'));
    }
}
