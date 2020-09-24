<?php

namespace App\Http\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutEmpresas extends Component
{
    public function render()
    {
        return view('livewire.login.logout-empresas');
    }
    public function logout()
    {
        if (Auth::guard('empresas')) {
            Auth::guard('empresas')->logout();
            if (Auth::guard('sucursales')) {
                Auth::guard('sucursales')->logout();
            }
            session()->flash('status', 'La sesión fue cerrada con exito');
            return redirect(route('login'));
        }
    }
}
