<?php

namespace App\Http\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Empleado extends Component
{
    public $id_empleado;
    public $password;
    public function render()
    {
        return view('livewire.login.empleado');
    }
    public function login()
    {
        $datos = $this->validate([
            'id_empleado' => 'required|numeric',
            'password' => 'required|string'
        ]);

        if (Auth::guard('empleados')->attempt(['id' => $datos['id_empleado'], 'password' => $datos['password']])) {
            if (Auth::guard('empresas')->check()) {
                Auth::guard('empresas')->logout();
            } elseif (Auth::guard('sucursales')->check()) {
                Auth::guard('sucursales')->logout();
            } elseif (Auth::guard('web')->check()) {
                Auth::guard('web')->logout();
            }

            return redirect(route('empleados-portal.inicio'));
        } else {
            session()->flash('status', 'Datos invalidos. Favor de verificar el número de empleado o el password.');
        }
    }
}
