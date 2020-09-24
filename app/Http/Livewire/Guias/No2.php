<?php

namespace App\Http\Livewire\Guias;

use App\Guia2;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class No2 extends Component
{
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
    public $p20;
    public $p21;
    public $p22;
    public $p23;
    public $p24;
    public $p25;
    public $p26;
    public $p27;
    public $p28;
    public $p29;
    public $p30;
    public $p31;
    public $p32;
    public $p33;
    public $p34;
    public $p35;
    public $p36;

    public function mount()
    {
        $this->id_empleado = Auth::user()->id;
    }

    public function render()
    {
        //pregintas de la guia II
        $preguntas = array(
            '1' => 'Mi trabajo me exige hacer mucho esfuerzo físico',
            '2' => 'Me preocupa sufrir un accidente en mi trabajo',
            '3' => 'Considero que las actividades que realizo son peligrosas',
            '4' => 'Por la cantidad de trabajo que tengo debo quedarme
            tiempo adicional a mi turno',
            '5' => 'Por la cantidad de trabajo que tengo debo
            trabajar sin parar',
            '6' => 'Considero que es necesario mantener un ritmo de
            trabajo acelerado',
            '7' => 'Mi trabajo exige que esté muy concentrado',
            '8' => 'Mi trabajo requiere que memorice mucha información',
            '9' => 'Mi trabajo exige que atienda varios asuntos al mismo
            tiempo',
            '10' => 'En mi trabajo soy responsable de cosas de mucho valor',
            '11' => 'Respondo ante mi jefe por los resultados de toda mi área
            de trabajo',
            '12' => 'En mi trabajo me dan órdenes contradictorias',
            '13' => 'Considero que en mi trabajo me piden hacer cosas
            innecesarias',
            '14' => 'Trabajo horas extras más de tres veces a la semana',
            '15' => 'Mi trabajo me exige laborar en
            días de descanso, festivos o fines de semana',
            '16' => 'Considero que el tiempo en el trabajo es mucho
            y perjudica mis actividades familiares o personales',
            '17' => 'Pienso en las actividades familiares o personales cuando
            estoy en mi trabajo',
            '18' => 'Mi trabajo permite que desarrolle nuevas habilidades',
            '19' => 'En mi trabajo puedo aspirar a un mejor puesto',
            '20' => 'Durante mi jornada de trabajo
            puedo tomar pausas cuando las necesito',
            '21' => 'Puedo decidir la velocidad a la que realizo
            mis actividades en mi trabajo',
            '22' => 'Puedo cambiar el orden de las actividades que
            realizo en mi trabajo',
            '23' => 'Me informan con claridad cuáles son mis funciones',
            '24' => 'Me explican claramente los resultados que debo obtener
            en mi trabajo',
            '25' => 'Me informan con quién puedo resolver problemas o
            asuntos de trabajo',
            '26' => 'Me permiten asistir a capacitaciones
            relacionadas con mi trabajo',
            '27' => 'Recibo capacitación útil para hacer mi trabajo',
            '28' => 'Mi jefe tiene en cuenta mis puntos de vista y opiniones',
            '29' => 'Mi jefe ayuda a solucionar los problemas que se
            presentan en el trabajo',
            '30' => 'Puedo confiar en mis compañeros de trabajo',
            '31' => 'Cuando tenemos que realizar trabajo de equipo los
            compañeros colaboran',
            '32' => 'Mis compañeros de trabajo me ayudan cuando tengo
            dificultades',
            '33' => 'En mi trabajo puedo expresarme libremente sin
            interrupciones',
            '34' => 'Recibo críticas constantes a mi persona y/o trabajo',
            '35' => 'Recibo burlas, calumnias, difamaciones,
            humillaciones o ridiculizaciones',
            '36' => 'Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones',
        );
        return view('livewire.guias.guia2', ['preguntas' => $preguntas]);
    }

    public function store()
    {
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
            'p19' => 'required',
            'p20' => 'required',
            'p21' => 'required',
            'p22' => 'required',
            'p23' => 'required',
            'p24' => 'required',
            'p25' => 'required',
            'p26' => 'required',
            'p27' => 'required',
            'p28' => 'required',
            'p29' => 'required',
            'p30' => 'required',
            'p31' => 'required',
            'p32' => 'required',
            'p33' => 'required',
            'p34' => 'required',
            'p35' => 'required',
            'p36' => 'required',
        ]);
        $datos['id_empleado'] = $this->id_empleado;
        Guia2::create($datos);
        session()->flash('status', 'Se completo la guía de referencia II
        correctamente. Sus resultados seran evaluados para identificar si sufre algun trauma severo. Gracias por su tiempo');
        return redirect(route('empleados-portal.guias'));

        
    }
}
