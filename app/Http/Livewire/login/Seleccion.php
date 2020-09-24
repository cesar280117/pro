<?php

namespace App\Http\Livewire\Login;

use App\Empresa;
use App\Sucursal;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Seleccion extends Component
{
    public $id_empresa;
    public function mount()
    {
        $this->id_empresa = Auth::user()->id;
    }
    public function render()
    {
        $empresa = Empresa::find($this->id_empresa);
        $sucursales = Sucursal::where('id_empresa', $this->id_empresa)
        ->orderBy('created_at','asc')
        ->get();
        return view('livewire.login.seleccion', ['sucursales' => $sucursales, 'empresa' => $empresa]);
    }
    public function login_empresa()
    {
        if (Auth::guard('sucursales')) {
            Auth::guard('sucursales')->logout();
        }
        return redirect(route('inicio'));
    }
    public function login_sucursal($id)
    {
        Auth::guard('sucursales')->loginUsingId($id);
        return redirect(route('inicio'));
    }
}
