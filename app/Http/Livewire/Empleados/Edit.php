<?php

namespace App\Http\Livewire\Empleados;

use App\Empleado;
use App\Jornada;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{

    use WithFileUploads;

    //id de la empresa en sesión
    public $id_empresa;

    //Datos de los empleados
    public $id_empleado;
    public $primer_nombre;
    public $segundo_nombre;
    public $apellido_paterno;
    public $apellido_materno;
    public $estado_civil;
    public $color_ojos;
    public $color_cabello;
    public $peso;
    public $nacionalidad;
    public $estatura;
    public $religion;
    public $nombre_emergencia;
    public $telefono_emergencia;
    public $celular_emergencia;
    public $curp;
    public $fecha_nacimiento;
    public $lugar_nacimiento;
    public $rfc;
    public $domicilio;
    public $email;
    public $foto_empleado;
    public $foto_temporal;
    public $sexo;
    public $donador;
    public $padecimientos_medicos;
    public $alergia;
    public $nivel_estudios;
    public $ocupacion;
    public $tipo_puesto;
    public $inicio_puesto;
    public $departamento;
    public $trabaja_actualmente;
    public $tiempo_puesto;
    public $tipo_contratacion;
    public $tipo_personal;
    public $id_jornada;
    public $jornada;
    public $rotacion_turnos;
    public $experiencia_puesto_actual;
    public $experiencia_puesto_laboral;
    public $hace_ejercicio;
    public $salario;
    public $estatus;
    public $nivel_pago;
    public $division;

    //sesion
    public $password;
    public $confirmar_password;

    public function mount($id)
    {
        $this->id_empresa = Auth::user()->id;
        $empleado = DB::table('empleados')
            ->where('empleados.id', $id)
            ->join('jornadas', 'empleados.id_jornada', '=', 'jornadas.id')
            ->select(
                'empleados.*',
                'jornadas.jornada'
            )
            ->first();


        //Datos de los empleados
        $this->id_empleado = $empleado->id;
        $this->primer_nombre = $empleado->primer_nombre;
        $this->segundo_nombre = $empleado->segundo_nombre;
        $this->apellido_paterno = $empleado->apellido_paterno;
        $this->apellido_materno = $empleado->apellido_materno;
        $this->estado_civil = $empleado->estado_civil;
        $this->color_ojos = $empleado->color_ojos;
        $this->color_cabello = $empleado->color_cabello;
        $this->peso = $empleado->peso;
        $this->nacionalidad = $empleado->nacionalidad;
        $this->estatura = $empleado->estatura;
        $this->religion = $empleado->religion;
        $this->nombre_emergencia = $empleado->nombre_emergencia;
        $this->telefono_emergencia = $empleado->telefono_emergencia;
        $this->celular_emergencia = $empleado->celular_emergencia;
        $this->curp = $empleado->curp;
        $this->fecha_nacimiento = $empleado->fecha_nacimiento;
        $this->lugar_nacimiento = $empleado->lugar_nacimiento;
        $this->rfc = $empleado->rfc;
        $this->domicilio = $empleado->domicilio;
        $this->email = $empleado->email;
        $this->foto_temporal = $empleado->foto_empleado;
        $this->sexo = $empleado->sexo;
        $this->donador = $empleado->donador;
        $this->padecimientos_medicos = $empleado->padecimientos_medicos;
        $this->alergia = $empleado->alergia;
        $this->nivel_estudios = $empleado->nivel_estudios;
        $this->ocupacion = $empleado->ocupacion;
        $this->tipo_puesto = $empleado->tipo_puesto;
        $this->inicio_puesto = $empleado->inicio_puesto;
        $this->departamento = $empleado->departamento;
        $this->trabaja_actualmente = $empleado->trabaja_actualmente;
        $this->tiempo_puesto = $empleado->tiempo_puesto;
        $this->tipo_contratacion = $empleado->tipo_contratacion;
        $this->tipo_personal = $empleado->tipo_personal;
        $this->id_jornada = $empleado->id_jornada;
        $this->jornada = $empleado->jornada;
        $this->rotacion_turnos = $empleado->rotacion_turnos;
        $this->experiencia_puesto_actual = $empleado->experiencia_puesto_actual;
        $this->experiencia_puesto_laboral = $empleado->experiencia_puesto_laboral;
        $this->hace_ejercicio = $empleado->hace_ejercicio;
        $this->salario = $empleado->salario;
        $this->estatus = $empleado->estatus;
        $this->nivel_pago = $empleado->nivel_pago;
        $this->division = $empleado->division;
    }
    public function render()
    {
        $jornadas = Jornada::where('id_empresa', $this->id_empresa)->get();
        return view('livewire.empleados.edit', ['jornadas' => $jornadas]);
    }

    public function update()
    {
        $empleado = Empleado::find($this->id_empleado);
        $datos = $this->validate([
            'primer_nombre' => 'required|string|max:255',
            'segundo_nombre' => 'max:255|string|nullable',
            'apellido_paterno' => 'required|string|max:255',
            'apellido_materno' => 'max:255|string|nullable',
            'estado_civil' => 'required|string|max:255',
            'color_ojos' => 'max:255|string|nullable',
            'color_cabello' => 'max:255|string|nullable',
            'peso' => 'required|numeric',
            'nacionalidad' => 'required|string|max:255',
            'estatura' => 'required|numeric',
            'religion' => 'max:255|string|nullable',
            'nombre_emergencia' => 'max:255|string|nullable',
            'curp' => 'required|max:18|unique:empleados,curp,' . $this->id_empleado,
            'fecha_nacimiento' => 'required|max:10',
            'lugar_nacimiento' => 'required|max:255|string',
            'rfc' => 'required|unique:empleados,rfc,' . $this->id_empleado,
            'domicilio' => 'required|max:255|string',
            'email' => 'required|unique:empleados,email,' . $this->id_empleado,
            'foto_empleado' => 'max:1020|image|nullable',
            'sexo' => 'required|max:10|string',
            'donador' => 'max:255|string|nullable',
            'padecimientos_medicos' => 'required|max:255|string',
            'alergia' => 'required|max:255|string',
            'nivel_estudios' => 'required|max:255|string',
            'ocupacion' => 'required|max:255|string',
            'tipo_puesto' => 'max:255|string|required',
            'departamento' => 'required|max:255|string',
            'trabaja_actualmente' => 'required|max:255|string',
            'tipo_contratacion' => 'required|max:255|string',
            'tipo_personal' => 'required|max:255|string',
            'id_jornada' => 'required|numeric|exists:jornadas,id',
            'rotacion_turnos' => 'required|max:255|string',
            'inicio_puesto' => 'required|string:max:255',
            'experiencia_puesto_actual' => 'required|max:255|string',
            'experiencia_puesto_laboral' => 'required|max:255|string',
            'hace_ejercicio' => 'required|max:255|string',
            'salario' => 'required|numeric',
            'estatus' => 'required|max:255|string',
            'nivel_pago' => 'required|max:255|string',
            'division' => 'required|max:255|string',
            'nombre_emergencia' => 'nullable|string|max:255',
            'telefono_emergencia' => 'nullable|string|max:255',
            'celular_emergencia' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:6',
            'confirmar_password' => 'same:password'

        ]);
        if ($this->foto_empleado) {
            if ($empleado['foto_empleado'] != 'images/empleados/default.png') {
                unlink(base_path() . '/storage/app/public/' . $empleado['foto_empleado']);
            }
            $datos['foto_empleado'] = $this->foto_empleado->store('images/empleados', 'public');
        } else {
            $datos['foto_empleado'] = $empleado['foto_empleado'];
        }
        if ($this->password) {
            $datos['password'] = Hash::make($datos['password']);
        } else {
            $datos['password'] = $empleado['password'];
        }
        $datos['tiempo_puesto'] = $this->calcular_fecha($datos['inicio_puesto']);
        $empleado->update($datos);
        session()->flash('status', 'Se modifico con exito el empleado');
        return redirect(route('empleados.index'));
    }


    private function calcular_fecha($inicio_puesto)
    {
        list($ano, $mes, $dia) = explode("-", $inicio_puesto);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0) {
            $ano_diferencia--;
        }

        return $ano_diferencia;
    }
}
