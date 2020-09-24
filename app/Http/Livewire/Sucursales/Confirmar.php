<?php

namespace App\Http\Livewire\Sucursales;

use App\Sucursal;
use Livewire\Component;

class Confirmar extends Component
{
    public $id_sucursal;
    public function mount($id)
    {
        $this->id_sucursal = $id;
    }
    public function render()
    {
        $sucursal = Sucursal::find($this->id_sucursal);
        return view('livewire.sucursales.confirmar', ['sucursal' => $sucursal]);
    }

    public function destroy()
    {
        $sucursal = Sucursal::find($this->id_sucursal);
        if ($sucursal->logo_sucursal != 'images/sucursales/default.png') {
            unlink(base_path() . '/storage/app/public/' . $sucursal->logo_sucursal);
        }
        $sucursal->delete();
        session()->flash('status', 'Se elimino con exito la sucursal');
        return redirect(route('sucursales.index'));
    }
}
