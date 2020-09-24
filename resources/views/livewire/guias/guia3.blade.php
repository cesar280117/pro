<div>
    <form wire:submit.prevent="store">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="text-center">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    <h5>{{ session('status') }}</h5>

                                </div>
                            @endif

                            <h5 class="text-muted">GUÍA DE REFERENCIA III</h5>
                            <p>CUESTIONARIO PARA IDENTIFICAR LOS FACTORES DE RIESGO PSICOSOCIAL Y EVALUAR EL ENTORNO
                                ORGANIZACIONAL EN LOS CENTROS DE TRABAJO</p>

                        </div>

                        <ul class="list-group list-group-unbordered">
                            {{-- parte 1 de la encuesta --}}
                            <li class="list-group-item">
                                <blockquote> Para responder las preguntas siguientes considere las condiciones
                                    ambientales de su centro de trabajo.</blockquote>
                            </li>


                            @foreach ($preguntas as $no_pregunta => $pregunta)

                                <li class="list-group-item">
                                    @if ($no_pregunta == '65')
                                        <span><b>{{ $no_pregunta . '. ' . $pregunta }}</b></span>
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="radio" value="Si"
                                                wire:model="{{ 'p' . $no_pregunta }}" name="{{ 'p' . $no_pregunta }}">
                                            <label class="form-check-label">
                                                Sí
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="No"
                                                wire:model="{{ 'p' . $no_pregunta }}" name="{{ 'p' . $no_pregunta }}">
                                            <label class="form-check-label">
                                                No
                                            </label>
                                        </div>
                                        @error('p'.$no_pregunta) <span class="text-danger">La pregunta es
                                            obligatoria.
                                            Favor de
                                            contestarla.</span> @enderror
                                    @else
                                        <span><b>{{ $no_pregunta . '. ' . $pregunta }}</b></span>
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="radio" value="Siempre"
                                                wire:model="{{ 'p' . $no_pregunta }}" name="{{ 'p' . $no_pregunta }}">
                                            <label class="form-check-label">
                                                Siempre
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Casi siempre"
                                                wire:model="{{ 'p' . $no_pregunta }}" name="{{ 'p' . $no_pregunta }}">
                                            <label class="form-check-label">
                                                Casi siempre
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Algunas veces"
                                                wire:model="{{ 'p' . $no_pregunta }}" name="{{ 'p' . $no_pregunta }}">
                                            <label class="form-check-label">
                                                Algunas veces
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Casi nunca"
                                                wire:model="{{ 'p' . $no_pregunta }}" name="{{ 'p' . $no_pregunta }}">
                                            <label class="form-check-label">
                                                Casi nunca
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="Nunca"
                                                wire:model="{{ 'p' . $no_pregunta }}" name="{{ 'p' . $no_pregunta }}">
                                            <label class="form-check-label">
                                                Nunca
                                            </label>
                                        </div>
                                        @error('p'.$no_pregunta) <span class="text-danger">La pregunta es obligatoria.
                                            Favor de
                                            contestarla.</span> @enderror
                                    @endif

                                </li>

                                @if ($no_pregunta == 5)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Para responder a las preguntas siguientes piense en la cantidad y ritmo de
                                            trabajo que tiene. </blockquote>
                                    </li>

                                @elseif ($no_pregunta == 8)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Las preguntas siguientes están relacionadas con el esfuerzo mental que le
                                            exige su trabajo.
                                        </blockquote>
                                    </li>


                                @elseif ($no_pregunta == 12)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Las preguntas siguientes están relacionadas con las actividades que realiza
                                            en su trabajo y
                                            las responsabilidades que tiene.
                                        </blockquote>
                                    </li>


                                @elseif ($no_pregunta == 16)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Las preguntas siguientes están relacionadas con su jornada de trabajo.
                                        </blockquote>
                                    </li>


                                @elseif ($no_pregunta == 22)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Las preguntas siguientes están relacionadas con las decisiones que puede
                                            tomar en su trabajo.
                                        </blockquote>
                                    </li>

                                @elseif ($no_pregunta == 28)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Las preguntas siguientes están relacionadas con cualquier tipo de cambio que
                                            ocurra en su
                                            trabajo (considere los últimos cambios realizados).
                                        </blockquote>
                                    </li>


                                @elseif ($no_pregunta ==30)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Las preguntas siguientes están relacionadas con la capacitación e
                                            información que se le
                                            proporciona sobre su trabajo.
                                        </blockquote>
                                    </li>


                                @elseif ($no_pregunta == 36)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Las preguntas siguientes están relacionadas con el o los jefes con quien
                                            tiene contacto. </blockquote>
                                    </li>


                                @elseif ($no_pregunta == 41)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Las preguntas siguientes se refieren a las relaciones con sus compañeros.
                                        </blockquote>
                                    </li>


                                @elseif ($no_pregunta == 46)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Las preguntas siguientes están relacionadas con la información que recibe
                                            sobre su rendimiento en
                                            el trabajo, el reconocimiento, el sentido de pertenencia y la estabilidad
                                            que le ofrece su trabajo. </blockquote>
                                    </li>


                                @elseif ($no_pregunta == 56)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Las preguntas siguientes están relacionadas con actos de violencia laboral
                                            (malos tratos,
                                            acoso, hostigamiento, acoso psicológico).</blockquote>
                                    </li>

                                @elseif ($no_pregunta == 64)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Las preguntas siguientes están relacionadas con la atención a clientes y
                                            usuarios. </blockquote>

                                    </li>

                                @endif

                            @endforeach

                            {{-- si preciono que sí a la respuesta de la pregunta 65, se
                            le
                            habilitaran nuevas preguntas a resolver --}}
                            @if ($p65 == 'Si')
                                @foreach ($preguntas2 as $no_pregunta => $pregunta)
                                    @if ($no_pregunta == '70')
                                        <li class="list-group-item">
                                            <span><b>{{ $no_pregunta . '. ' . $pregunta }}</b></span>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="radio" value="Si"
                                                    wire:model="{{ 'p' . $no_pregunta }}"
                                                    name="{{ 'p' . $no_pregunta }}">
                                                <label class="form-check-label">
                                                    Sí
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="No"
                                                    wire:model="{{ 'p' . $no_pregunta }}"
                                                    name="{{ 'p' . $no_pregunta }}">
                                                <label class="form-check-label">
                                                    No
                                                </label>
                                            </div>
                                            @error('p'.$no_pregunta) <span class="text-danger">La pregunta es
                                                obligatoria.
                                                Favor de
                                                contestarla.</span> @enderror
                                        </li>


                                    @else
                                        <li class="list-group-item">
                                            <span><b>{{ $no_pregunta . '. ' . $pregunta }}</b></span>
                                            <div class="form-check mt-2">
                                                <input class="form-check-input" type="radio" value="Siempre"
                                                    wire:model="{{ 'p' . $no_pregunta }}"
                                                    name="{{ 'p' . $no_pregunta }}">
                                                <label class="form-check-label">
                                                    Siempre
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Casi siempre"
                                                    wire:model="{{ 'p' . $no_pregunta }}"
                                                    name="{{ 'p' . $no_pregunta }}">
                                                <label class="form-check-label">
                                                    Casi siempre
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Algunas veces"
                                                    wire:model="{{ 'p' . $no_pregunta }}"
                                                    name="{{ 'p' . $no_pregunta }}">
                                                <label class="form-check-label">
                                                    Algunas veces
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Casi nunca"
                                                    wire:model="{{ 'p' . $no_pregunta }}"
                                                    name="{{ 'p' . $no_pregunta }}">
                                                <label class="form-check-label">
                                                    Casi nunca
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="Nunca"
                                                    wire:model="{{ 'p' . $no_pregunta }}"
                                                    name="{{ 'p' . $no_pregunta }}">
                                                <label class="form-check-label">
                                                    Nunca
                                                </label>
                                            </div>
                                            @error('p'.$no_pregunta) <span class="text-danger">La pregunta es
                                                obligatoria.
                                                Favor de
                                                responderla.</span> @enderror

                                        </li>
                                    @endif
                                @endforeach
                            @endif



                        </ul>
                        @if (Auth::guard('empleados')->check())

                            <button type="submit" class="btn btn-primary btn-block"><i class=" fa fa-save"> </i> Guardar
                                encuesta</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
