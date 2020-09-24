<div>
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="card card-outline card-primary">
                <div class="card-body">
                    <div class="text-center">

                        <img style="width: 170px;height:170px" class="profile-user-img img-fluid img-circle"
                            src="{{ asset('storage/' . $empleado->foto_empleado) }}"
                            alt="No cuenta con foto el empleado :(">
                    </div>
                    <h3 class="profile-username text-center text-capitalize">
                        {{ $empleado->primer_nombre . ' ' . $empleado->apellido_paterno }}</h3>
                    <p class="text-muted text-center">{{ $empleado->ocupacion }}</p>


                    <ul class="list-group list-group-unbordered mb-3">

                        <li class="list-group-item">
                            <b>ID de empleado</b> <a style="font-size:14px"
                                class="float-right badge badge-info badge-pill">{{ $empleado->id }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Nombres(s)</b> <a
                                class="float-right">{{ $empleado->primer_nombre . ' ' . $empleado->segundo_nombre }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Apellidos</b> <a
                                class="float-right">{{ $empleado->apellido_paterno . ' ' . $empleado->apellido_materno }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Estado civil</b> <a class="float-right">{{ $empleado->estado_civil }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Color de ojos</b> <a class="float-right">{{ $empleado->color_ojos }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Color de cabello</b> <a class="float-right">{{ $empleado->color_cabello }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Peso</b> <a class="float-right">{{ $empleado->peso }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Nacionalidad</b> <a class="float-right">{{ $empleado->nacionalidad }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Estatura</b> <a class="float-right">{{ $empleado->estatura }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Religion</b> <a class="float-right">{{ $empleado->religion }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>CURP</b> <a class="float-right">{{ $empleado->curp }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Fecha de nacimiento</b> <a class="float-right">{{ $empleado->fecha_nacimiento }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Lugar de nacimiento</b> <a class="float-right">{{ $empleado->lugar_nacimiento }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>RFC</b> <a class="float-right">{{ $empleado->rfc }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Domicilio</b> <a class="float-right">{{ $empleado->domicilio }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Email</b> <a class="float-right">{{ $empleado->email }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Sexo</b> <a class="float-right">{{ $empleado->sexo }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Donador</b> <a class="float-right">{{ $empleado->donador }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Padecimientos medicos</b> <a
                                class="float-right">{{ $empleado->padecimientos_medicos }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Tiene algun tipo de alergia</b> <a class="float-right">{{ $empleado->alergia }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Nivel de estudios</b> <a class="float-right">{{ $empleado->nivel_estudios }}</a>
                        </li>


                        <li class="list-group-item">
                            <b>Ocupación</b> <a class="float-right">{{ $empleado->ocupacion }}</a>
                        </li>


                        <li class="list-group-item">
                            <b>Tipo de puesto</b> <a class="float-right">{{ $empleado->tipo_puesto }}</a>
                        </li>


                        <li class="list-group-item">
                            <b>Departamento</b> <a class="float-right">{{ $empleado->departamento }}</a>
                        </li>


                        <li class="list-group-item">
                            <b>Trabaja actualmente</b> <a class="float-right">{{ $empleado->trabaja_actualmente }}</a>
                        </li>


                        <li class="list-group-item">
                            <b>Inicio de puesto en la empresa</b> <a
                                class="float-right">{{ $empleado->inicio_puesto }}</a>
                        </li>


                        <li class="list-group-item">
                            <b>Tiempo de puesto en la empresa</b> <a class="float-right">{{ $empleado->tiempo_puesto }}
                                año(s)</a>
                        </li>


                        <li class="list-group-item">
                            <b>Tipo de contratación</b> <a class="float-right">{{ $empleado->tipo_contratacion }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Tipo de personal</b> <a class="float-right">{{ $empleado->tipo_personal }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Jorada laboral</b> <a class="float-right">{{ $empleado->jornada }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Rotación de turnos</b> <a class="float-right">{{ $empleado->rotacion_turnos }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Experiencia (años): Tiempo en el puesto actual</b> <a
                                class="float-right">{{ $empleado->experiencia_puesto_actual }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Tiempo de experiencia laboral</b> <a
                                class="float-right">{{ $empleado->experiencia_puesto_laboral }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Hace algun tipo de ejercicio</b> <a
                                class="float-right">{{ $empleado->hace_ejercicio }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Salario</b> <a class="float-right">$ {{ $empleado->salario }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Estatus</b> <a class="float-right">{{ $empleado->estatus }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Nivel de pago</b> <a class="float-right">{{ $empleado->nivel_pago }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>División</b> <a class="float-right">{{ $empleado->division }}</a>
                        </li>

                        <li class="list-group-item">
                            <b>Nombre (en caso de emergencia)</b> <a
                                class="float-right">{{ $empleado->nombre_emergencia }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Telefono (en caso de emergencia)</b> <a
                                class="float-right">{{ $empleado->telefono_emergencia }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Celular (en caso de emergencia) </b> <a
                                class="float-right">{{ $empleado->celular_emergencia }}</a>
                        </li>


                    </ul>




                    <a href="{{ route('empleados-portal.inicio') }}" class="btn btn-primary btn-block"><b><i
                                class="fa fa-home"></i>
                            Regresar</b></a>
                </div>
            </div>
        </div>

    </div>
</div>
