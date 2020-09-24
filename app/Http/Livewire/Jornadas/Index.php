<?php

namespace App\Http\Livewire\Jornadas;

use App\Jornada;
use Illuminate\Support\Facades\Auth;
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
        $jornadas = Jornada::where('id_empresa', $this->id_empresa)
            ->where('id', 'like', '%' . $this->busqueda . '%')
            ->paginate(10);
        return view('livewire.jornadas.index', ['jornadas' => $jornadas]);
    }
}
