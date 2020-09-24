<?php

namespace App\Http\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutSucursales extends Component
{
    public function render()
    {
        return view('livewire.login.logout-sucursales');
    }
    public function logout()
    {
        Auth::guard('sucursales')->logout();
        session()->flash('status', 'La sesión fue cerrada con exito');
        return redirect(route('login'));
    }
}
