<?php

namespace App\Http\Livewire\Jornadas;

use App\Jornada;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{

    public $id_jornada;
    public $turno;
    public $hora_inicial;
    public $hora_final;
    public $jornada;

    public $id_empresa;

    public function mount()
    {
        $this->id_empresa = Auth::user()->id;
    }
    public function render()
    {
        return view('livewire.jornadas.create');
    }

    public function store()
    {
        $this->jornada = 'fijo ' . $this->turno . ' entre las ' . $this->hora_inicial . ' y ' . $this->hora_final . ' hrs ';
        $datos = $this->validate([
            'turno' => 'required|string|max:255',
            'hora_inicial' => 'required|max:255',
            'hora_final' => 'required|max:255',
            'jornada' => 'unique:jornadas,jornada'
        ]);
        $datos['id_empresa'] = $this->id_empresa;
        Jornada::create($datos);
        session()->flash('status', 'Se creo con exito la jornada laboral.');
        return redirect(route('jornadas.index'));
    }
}
