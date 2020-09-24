<?php

namespace App\Http\Livewire\Empresas;

use App\Empresa;

use Livewire\Component;


class Confirm extends Component
{
    public $id_empresa;

    public function mount($id)
    {
        $this->id_empresa = $id;
    }

    public function render()
    {

        $empresa = Empresa::find($this->id_empresa);
        return view('livewire.empresas.confirmar', ['empresa' => $empresa]);
    }


    public function destroy()
    {
        $empresa = Empresa::find($this->id_empresa);

        if ($empresa['logo_empresa'] != 'images/empresas/default.png') {
            unlink(base_path() . '/storage/app/public/' . $empresa['logo_empresa']);
        }
        $empresa->delete();
        session()->flash('status', 'La empresa fue dada de baja con exito.');
        return redirect(route('empresas.index'));
    }
}
