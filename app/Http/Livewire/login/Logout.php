<?php

namespace App\Http\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.login.logout');
    }
    public function logout()
    {
        Auth::logout();
        session()->flash('status', 'La sesión fue cerrada con exito');
        return redirect(route('login'));
    }
}
