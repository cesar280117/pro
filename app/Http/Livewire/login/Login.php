<?php

namespace App\Http\Livewire\login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $vista = 'index';
    public $rfc;
    public $email;
    public $password;
    public $nombre;
    public $logo;

    public $sucursales;


    public function render()
    {
        return view('livewire.login.inicio');
    }

    public function login()
    {
        $datos = $this->validate([
            'email' => 'required|max:255',
            'password' => 'required|string|min:6'
        ]);

        //validar sesión de administradores del sistema
        if (Auth::attempt($datos)) {
            return redirect(route('inicio-admin'));
        } elseif (Auth::guard('empresas')->attempt($datos)) {
            if (Auth::guard('web')->check()) {
                Auth::guard('web')->logout();
            }
            if (Auth::guard('empleados')->check()) {
                Auth::guard('empleados')->logout();
            }
            return redirect(route('login.seleccion'));
        } elseif (Auth::guard('sucursales')->attempt($datos)) {
            if (Auth::guard('web')->check()) {
                Auth::guard('web')->logout();
            }
            if (Auth::guard('empleados')->check()) {
                Auth::guard('empleados')->logout();
            }
            return redirect(route('inicio'));
        } else {
            session()->flash('status', 'Datos invalidos. Favor de verificar el email o el password.');
        }
    }
}
