<?php

namespace App\Http\Livewire\Guias;

use App\Guia3;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class No3 extends Component
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
    public $p37;
    public $p38;
    public $p39;
    public $p40;
    public $p41;
    public $p42;
    public $p43;
    public $p44;
    public $p45;
    public $p46;
    public $p47;
    public $p48;
    public $p49;
    public $p50;
    public $p51;
    public $p52;
    public $p53;
    public $p54;
    public $p55;
    public $p56;
    public $p57;
    public $p58;
    public $p59;
    public $p60;
    public $p61;
    public $p62;
    public $p63;
    public $p64;
    public $p65;
    public $p66;
    public $p67;
    public $p68;
    public $p69;
    public $p70;


    public function mount()
    {
        $this->id_empleado = Auth::user()->id;
    }

    public function render()
    {
        //pregintas de la guia III
        $preguntas = array(
            '1' => 'El espacio donde trabajo me permite realizar mis
            actividades de manera segura e higiénica',
            '2' => 'Mi trabajo me exige hacer mucho esfuerzo físico',
            '3' => 'Me preocupa sufrir un accidente en mi trabajo',
            '4' => 'Considero que en mi trabajo se aplican las
            normas de seguridad y salud en el trabajo',
            '5' => 'Considero que las actividades que realizo son
            peligrosas',
            '6' => 'Por la cantidad de trabajo que tengo debo quedarme
            tiempo adicional a mi turno',
            '7' => 'Por la cantidad de trabajo que tengo debo trabajar sin
            parar',
            '8' => 'Considero que es necesario mantener un ritmo
            de trabajo acelerado',
            '9' => 'Mi trabajo exige que esté muy concentrado',
            '10' => 'Mi trabajo requiere que memorice mucha información',
            '11' => 'En mi trabajo tengo que tomar decisiones difíciles muy
            rápido',
            '12' => 'Mi trabajo exige que atienda varios asuntos al mismo
            tiempo',
            '13' => 'En mi trabajo soy responsable de cosas de
            mucho valor',
            '14' => 'Respondo ante mi jefe por los resultados de toda
            mi área de trabajo',
            '15' => 'En el trabajo me dan órdenes contradictorias',
            '16' => 'Considero que en mi trabajo me piden hacer cosas
            innecesarias',
            '17' => 'Trabajo horas extras más de tres veces a la semana',
            '18' => 'Mi trabajo me exige laborar en días de descanso
            ,festivos o fines de semana',
            '19' => 'Considero que el tiempo en el trabajo es mucho y
            perjudica mis actividades familiares o personales',
            '20' => 'Debo atender asuntos de trabajo cuando estoy
            en casa',
            '21' => 'Pienso en las actividades familiares o
            personales cuando estoy en mi trabajo',
            '22' => 'Pienso que mis responsabilidades familiares
            afectan mi trabajo',
            '23' => 'Mi trabajo permite que desarrolle nuevas habilidades',
            '24' => 'En mi trabajo puedo aspirar a un mejor puesto',
            '25' => 'Durante mi jornada de trabajo puedo tomar pausas
            cuando las necesito',
            '26' => 'Puedo decidir cuánto trabajo realizo durante
            la jornada laboral',
            '27' => 'Puedo decidir la velocidad a la que realizo mis
            actividades en mi trabajo',
            '28' => 'Puedo cambiar el orden de las actividades que realizo
            en mi trabajo',
            '29' => 'Los cambios que se presentan en mi trabajo
            dificultan mi labor',
            '30' => 'Cuando se presentan cambios en mi trabajo se
            tienen en cuenta mis ideas o aportaciones',
            '31' => 'Me informan con claridad cuáles son mis funciones',
            '32' => 'Me explican claramente los resultados que debo
            obtener en mi trabajo',
            '33' => 'Me explican claramente los objetivos de mi trabajo',
            '34' => 'Me informan con quién puedo resolver problemas o
            asuntos de trabajo',
            '35' => 'Me permiten asistir a capacitaciones relacionadas con
            mi trabajo',
            '36' => 'Recibo capacitación útil para hacer mi trabajo',
            '37' => 'Mi jefe ayuda a organizar mejor el trabajo',
            '38' => 'Mi jefe tiene en cuenta mis puntos de vista
            y opiniones',
            '39' => 'Mi jefe me comunica a tiempo la información
            relacionada con el trabajo',
            '40' => 'La orientación que me da mi jefe me ayuda a realizar
            mejor mi trabajo',
            '41' => 'Mi jefe ayuda a solucionar los problemas que se
            presentan en el trabajo',
            '42' => 'Mi jefe ayuda a solucionar los problemas que se
            presentan en el trabajo',
            '43' => 'Mi jefe ayuda a solucionar los problemas que se
            presentan en el trabajo',
            '44' => 'Mi jefe ayuda a solucionar los problemas que se
            presentan en el trabajo',
            '45' => 'Mi jefe ayuda a solucionar los problemas que se
            presentan en el trabajo',
            '46' => 'Mi jefe ayuda a solucionar los problemas que se
            presentan en el trabajo',
            '47' => 'Me informan sobre lo que hago bien en mi trabajo',
            '48' => 'La forma como evalúan mi trabajo en mi centro de
            trabajo me ayuda a mejorar mi desempeño',
            '49' => 'En mi centro de trabajo me pagan a tiempo mi salario',
            '50' => 'El pago que recibo es el que merezco por el
            trabajo que realizo',
            '51' => 'Si obtengo los resultados esperados en mi trabajo me
            recompensan o reconocen',
            '52' => 'Las personas que hacen bien el trabajo pueden crecer
            laboralmente',
            '53' => 'Considero que mi trabajo es estable',
            '54' => 'En mi trabajo existe continua rotación de personal',
            '55' => 'Siento orgullo de laborar en este centro de trabajo',
            '56' => 'Me siento comprometido con mi trabajo',
            '57' => 'En mi trabajo puedo expresarme libremente sin
            interrupciones',
            '58' => 'Recibo críticas constantes a mi persona y/o trabajo',
            '59' => 'Recibo burlas, calumnias, difamaciones,
            humillaciones o ridiculizaciones',
            '60' => 'Se ignora mi presencia o se me excluye de
            las reuniones de trabajo y en la toma de decisiones',
            '61' => 'Se manipulan las situaciones de trabajo para hacerme
            parecer un mal trabajador',
            '62' => 'Se ignoran mis éxitos laborales y se atribuyen a otros
            trabajadores',
            '63' => 'Me bloquean o impiden las oportunidades que tengo
            para obtener ascenso o mejora en mi trabajo',
            '64' => 'He presenciado actos de violencia en mi centro de
            trabajo',
            '65' => 'En mi trabajo debo brindar servicio a clientes o
            usuarios',

        );

        $preguntas2 = array(
            '66' => 'Atiendo clientes o usuarios muy enojados',
            '67' => 'Mi trabajo me exige atender personas
            muy necesitadas de ayuda o enfermas',
            '68' => 'Para hacer mi trabajo debo demostrar sentimientos
            distintos a los míos',
            '69' => 'Mi trabajo me exige atender situaciones de violencia',
            '70' => 'Soy jefe de otros trabajadores'
        );
        return view('livewire.guias.guia3', ['preguntas' => $preguntas, 'preguntas2' => $preguntas2]);
    }
    public function store()
    {
        if ($this->p65 == 'Si') {
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
                'p37' => 'required',
                'p38' => 'required',
                'p39' => 'required',
                'p40' => 'required',
                'p41' => 'required',
                'p42' => 'required',
                'p43' => 'required',
                'p44' => 'required',
                'p45' => 'required',
                'p46' => 'required',
                'p47' => 'required',
                'p48' => 'required',
                'p49' => 'required',
                'p50' => 'required',
                'p51' => 'required',
                'p52' => 'required',
                'p53' => 'required',
                'p54' => 'required',
                'p55' => 'required',
                'p56' => 'required',
                'p57' => 'required',
                'p58' => 'required',
                'p59' => 'required',
                'p60' => 'required',
                'p61' => 'required',
                'p62' => 'required',
                'p63' => 'required',
                'p64' => 'required',
                'p65' => 'required',
                'p66' => 'required',
                'p67' => 'required',
                'p68' => 'required',
                'p69' => 'required',
                'p70' => 'required'
            ]);
            $datos['id_empleado'] = $this->id_empleado;
            Guia3::create($datos);
            session()->flash('status', 'Se completo la guía de referencia III
            correctamente. Sus resultados seran evaluados para identificar si sufre algun trauma severo. Gracias por su tiempo');
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
                'p37' => 'required',
                'p38' => 'required',
                'p39' => 'required',
                'p40' => 'required',
                'p41' => 'required',
                'p42' => 'required',
                'p43' => 'required',
                'p44' => 'required',
                'p45' => 'required',
                'p46' => 'required',
                'p47' => 'required',
                'p48' => 'required',
                'p49' => 'required',
                'p50' => 'required',
                'p51' => 'required',
                'p52' => 'required',
                'p53' => 'required',
                'p54' => 'required',
                'p55' => 'required',
                'p56' => 'required',
                'p57' => 'required',
                'p58' => 'required',
                'p59' => 'required',
                'p60' => 'required',
                'p61' => 'required',
                'p62' => 'required',
                'p63' => 'required',
                'p64' => 'required',
                'p65' => 'required',
            ]);
            $datos['id_empleado'] = $this->id_empleado;
            Guia3::create($datos);
            session()->flash('status', 'Se completo la guía de referencia III
            correctamente. Sus resultados seran evaluados para identificar si sufre algun trauma severo. Gracias por su tiempo');
        }
    }
}
