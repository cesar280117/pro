<?php

namespace App\Http\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutEmpleados extends Component
{
    public function render()
    {
        return view('livewire.login.logout-empleados');
    }
    public function logout()
    {
        if (Auth::guard('empleados')->check()) {
            Auth::guard('empleados')->logout();
            session()->flash('status', 'La sesión fue cerrada con exito');
            return redirect(route('login.empleados'));
        }
    }
}
