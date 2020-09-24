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
                            <h3 class="h5">
                                IDENTIFICACIÓN Y ANÁLISIS DE LOS FACTORES DE RIESGO PSICOSOCIAL
                            </h3>
                            <h5 class="text-muted">GUÍA DE REFERENCIA II</h5>
                            <p>CUESTIONARIO PARA IDENTIFICAR LOS FACTORES DE RIESGO PSICOSOCIAL EN LOS CENTROS DE
                                TRABAJO</p>

                        </div>

                        <ul class="list-group list-group-unbordered">
                            {{-- parte 1 de la encuesta --}}
                            <li class="list-group-item">
                                <blockquote> Para responder las preguntas siguientes considere las condiciones de su
                                    centro de
                                    trabajo,
                                    así como
                                    la cantidad y ritmo de trabajo.</blockquote>
                            </li>


                            @foreach ($preguntas as $no_pregunta => $pregunta)

                                <li class="list-group-item">
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
                                        responderla.</span> @enderror
                                </li>

                                @if ($no_pregunta == 9)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Las preguntas siguientes están relacionadas con las actividades que realiza
                                            en
                                            su trabajo y
                                            las responsabilidades que tiene.
                                        </blockquote>
                                    </li>

                                @elseif ($no_pregunta == 13)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Las preguntas siguientes están relacionadas con el tiempo destinado a su
                                            trabajo y sus
                                            responsabilidades familiares.
                                        </blockquote>
                                    </li>


                                @elseif ($no_pregunta == 17)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Las preguntas siguientes están relacionadas con las decisiones que puede
                                            tomar en su trabajo.
                                        </blockquote>
                                    </li>


                                @elseif ($no_pregunta == 22)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Las preguntas siguientes están relacionadas con la capacitación e
                                            información que recibe sobre
                                            su trabajo.
                                        </blockquote>
                                    </li>


                                @elseif ($no_pregunta == 27)
                                    <li class="list-group-item">
                                        <blockquote>
                                            Las preguntas siguientes se refieren a las relaciones con sus compañeros de
                                            trabajo y su jefe.
                                        </blockquote>
                                    </li>



                                @endif

                            @endforeach



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
