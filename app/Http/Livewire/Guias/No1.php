<?php

namespace App\Http\Livewire\Guias;

use Livewire\Component;
use App\Guia1;
use Illuminate\Support\Facades\Auth;

class No1 extends Component
{
    //id del empleado que inicio sesion en su portal
    public $id_empleado;

    public $p1;
    public $p2;
    public $p3;
    public $p4;
    public $p5;
    public $p6;
    public $p7;
    public $p8;
    public $p9;
    public $p10;
    public $p11;
    public $p12;
    public $p13;
    public $p14;
    public $p15;
    public $p16;
    public $p17;
    public $p18;
    public $p19;

    public function mount()
    {
        $this->id_empleado = Auth::user()->id;
    }
    public function render()
    {
        return view('livewire.guias.guia1');
    }

    public function store()
    {
        if ($this->p1 == 'No' && $this->p2 == 'No' && $this->p3 == 'No' && $this->p4 == 'No' && $this->p5 == 'No') {
            $datos = $this->validate([
                'p1' => 'required',
                'p2' => 'required',
                'p3' => 'required',
                'p4' => 'required',
                'p5' => 'required'
            ]);
            $datos['atencion_medica'] = 'No';
            $datos['id_empleado'] = $this->id_empleado;
            Guia1::create($datos);
            session()->flash('status', 'Se completo la guía de referencia I
            correctamente. Sus resultados seran evaluados para identificar si sufre algun trauma severo. Gracias por su tiempo');
            return redirect(route('empleados-portal.guias'));
        } else {
            $datos = $this->validate([
                'p1' => 'required',
                'p2' => 'required',
                'p3' => 'required',
                'p4' => 'required',
                'p5' => 'required',
                'p6' => 'required',
                'p7' => 'required',
                'p8' => 'required',
                'p9' => 'required',
                'p10' => 'required',
                'p11' => 'required',
                'p12' => 'required',
                'p13' => 'required',
                'p14' => 'required',
                'p15' => 'required',
                'p16' => 'required',
                'p17' => 'required',
                'p18' => 'required',
                'p19' => 'required'
            ]);
        }
        $datos['atencion_medica'] = 'No';
        $datos['id_empleado'] = 1;

        //  Validación 1) Cuando responda Sí, en alguna de las preguntas de la Sección II Recuerdos persistentes
        // sobre acontecimiento.
        if ($this->p6 == 'Si' || $this->p7 == 'Si') {
            $datos['atencion_medica'] = 'Si';
        }

        //Cuando responda Sí, en tres o más de las preguntas de la Sección III Esfuerzo por evitar
        // circunstancias parecidas o asociadas al acontecimiento.
        $bandera1 = 0;
        for ($i = 8; $i < 15; $i++) {
            $r = 'p' . $i;
            if ($this->$r == 'Si') {
                $bandera1++;
            }
        }
        if ($bandera1 >= 3) {
            $datos['atencion_medica'] = 'Si';
        }


        // Cuando responda Sí, en dos o más de las preguntas de la Sección IV Afectación.
        $bandera2 = 0;
        for ($i = 15; $i < 20; $i++) {
            $r = 'p' . $i;
            if ($this->$r == 'Si') {
                $bandera2++;
            }
        }
        if ($bandera2 >= 2) {
            $datos['atencion_medica'] = 'Si';
        }

        $datos['id_empleado'] = $this->id_empleado;
        Guia1::create($datos);
        session()->flash('status', 'Se completo la guía de referencia I
        correctamente. Sus resultados seran evaluados para identificar si sufre algun trauma severo. Gracias por su tiempo');
        return redirect(route('empleados-portal.guias'));
    }
}
