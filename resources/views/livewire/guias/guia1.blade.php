<div>
    <form wire:submit.prevent="store">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                <h4>{{ session('status') }}</h4>
                            </div>
                        @endif
                        <h5 class="text-muted text-center">GUÍA DE REFERENCIA I</h5>
                        <h6 class="text-center">CUESTIONARIO PARA IDENTIFICAR A LOS TRABAJADORES QUE FUERON SUJETOS A
                            ACONTECIMIENTOS TRAUMÁTICOS SEVEROS</h6>

                        <ul class="list-group list-group-unbordered">

                            <li class="list-group-item">
                                <blockquote class="quote-danger">¿Ha presenciado o sufrido alguna vez, durante o con
                                    motivo del trabajo un
                                    acontecimiento como los siguientes:</blockquote>
                            </li>
                            {{-- seccion I de la encuesta --}}
                            <li class="list-group-item">
                                <blockquote>
                                    I.- Acontecimiento traumático severo
                                </blockquote>
                            </li>



                            <li class="list-group-item">
                                <span><b>1. ¿Accidente que tenga como consecuencia la muerte, la pérdida de un miembro o
                                        una lesión grave?</b></span>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" value="Si" wire:model="p1" name="p1">
                                    <label class="form-check-label">
                                        Sí
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="No" wire:model="p1" name="p1">
                                    <label class="form-check-label">
                                        No
                                    </label>
                                </div>
                                @error('p1') <span class="text-danger">La pregunta es obligatoria. Favor de
                                    responderla.</span> @enderror
                            </li>
                            <li class="list-group-item">
                                <span><b>2. ¿Asaltos?</b></span>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" value="Si" wire:model="p2" name="p2">
                                    <label class="form-check-label">
                                        Sí
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="No" wire:model="p2" name="p2">
                                    <label class="form-check-label">
                                        No
                                    </label>
                                </div>
                                @error('p2') <span class="text-danger">La pregunta es obligatoria. Favor de
                                    responderla.</span> @enderror

                            </li>



                            <li class="list-group-item">
                                <span><b>3. ¿Actos violentos que derivaron en lesiones graves?</b> </span>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Si" wire:model="p3" name="p3">
                                    <label class="form-check-label">
                                        Sí
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="No" wire:model="p3" name="p3">
                                    <label class="form-check-label">
                                        No
                                    </label>
                                </div>
                                @error('p3') <span class="text-danger">La pregunta es obligatoria. Favor de
                                    responderla.</span> @enderror

                            </li>


                            <li class="list-group-item">
                                <span><b>4. ¿Secuestro?</b></span>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Si" wire:model="p4" name="p4">
                                    <label class="form-check-label">
                                        Sí
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="No" wire:model="p4" name="p4">
                                    <label class="form-check-label">
                                        No
                                    </label>
                                </div>
                                @error('p4') <span class="text-danger">La pregunta es obligatoria. Favor de
                                    responderla.</span> @enderror

                            </li>


                            <li class="list-group-item">
                                <span>
                                    <b>5. ¿Amenazas?, o
                                        ¿Cualquier otro que ponga en riesgo su vida o salud, y/o la de otras
                                        personas?</b></span>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="Si" wire:model="p5" name="p5">
                                    <label class="form-check-label">
                                        Sí
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="No" wire:model="p5" name="p5">
                                    <label class="form-check-label">
                                        No
                                    </label>
                                </div>
                                @error('p5') <span class="text-danger">La pregunta es obligatoria. Favor de
                                    responderla.</span> @enderror

                            </li>



                            @if ($p1 == 'Si' || $p2 == 'Si' || $p3 == 'Si' || $p4 == 'Si' || $p5 == 'Si')
                                {{-- seccion II de la encuesta
                                --}}

                                <li class="list-group-item">
                                    <blockquote>

                                        II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):
                                    </blockquote>
                                </li>

                                <li class="list-group-item">
                                    <span><b>6. ¿Ha tenido recuerdos recurrentes sobre el acontecimiento que le provocan
                                            malestares? </b></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" wire:model="p6" value="Si"
                                            name="p6">
                                        <label class="form-check-label">
                                            Sí
                                        </label>
                                    </div>


                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" wire:model="p6" value="No"
                                            name="p6">
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    @error('p6') <span class="text-danger">La pregunta es obligatoria. Favor de
                                        responderla.</span> @enderror

                                </li>


                                <li class="list-group-item">
                                    <span><b>7. ¿Ha tenido sueños de carácter recurrente sobre el acontecimiento, que le
                                            producen
                                            malestar?</b></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" wire:model="p7" value="Si"
                                            name="p7">
                                        <label class="form-check-label">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" wire:model="p7" value="No"
                                            name="p7">
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    @error('p7') <span class="text-danger">La pregunta es obligatoria. Favor de
                                        responderla.</span> @enderror

                                </li>



                                {{-- seccion III de la encuesta
                                --}}
                                <li class="list-group-item">
                                    <blockquote>

                                        III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento
                                        (durante
                                        el último mes):
                                    </blockquote>
                                </li>

                                <li class="list-group-item">
                                    <span><b>8. ¿Se ha esforzado por evitar todo tipo de sentimientos, conversaciones o
                                            situaciones
                                            que le puedan recordar el acontecimiento?</b></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Si" wire:model="p8"
                                            name="p8">
                                        <label class="form-check-label">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="No" wire:model="p8"
                                            name="p8">
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    @error('p8') <span class="text-danger">La pregunta es obligatoria. Favor de
                                        responderla.</span> @enderror

                                </li>


                                <li class="list-group-item">
                                    <span><b>9. ¿Se ha esforzado por evitar todo tipo de actividades, lugares o personas
                                            que
                                            motivan
                                            recuerdos del acontecimiento?</b></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Si" wire:model="p9"
                                            name="p9">
                                        <label class="form-check-label">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="No" wire:model="p9"
                                            name="p9">
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    @error('p9') <span class="text-danger">La pregunta es obligatoria. Favor de
                                        responderla.</span> @enderror

                                </li>



                                <li class="list-group-item">
                                    <span><b>10. ¿Ha tenido dificultad para recordar alguna parte importante del
                                            evento?</b></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Si" wire:model="p10"
                                            name="p10">
                                        <label class="form-check-label">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="No" wire:model="p10"
                                            name="p10">
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    @error('p10') <span class="text-danger">La pregunta es obligatoria. Favor de
                                        responderla.</span> @enderror

                                </li>




                                <li class="list-group-item">
                                    <span><b>11. ¿Ha disminuido su interés en sus actividades cotidianas?</b></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Si" wire:model="p11"
                                            name="p11">
                                        <label class="form-check-label">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="No" wire:model="p11"
                                            name="p11">
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    @error('p11') <span class="text-danger">La pregunta es obligatoria. Favor de
                                        responderla.</span> @enderror

                                </li>





                                <li class="list-group-item">
                                    <span><b>12. ¿Se ha sentido usted alejado o distante de los demás?</b></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Si" wire:model="p12"
                                            name="p12">
                                        <label class="form-check-label">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="No" wire:model="p12"
                                            name="p12">
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    @error('p12') <span class="text-danger">La pregunta es obligatoria. Favor de
                                        responderla.</span> @enderror

                                </li>




                                <li class="list-group-item">
                                    <span><b>13. ¿Ha notado que tiene dificultad para expresar sus
                                            sentimientos?</b></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Si" wire:model="p13"
                                            name="p13">
                                        <label class="form-check-label">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="No" wire:model="p13"
                                            name="p13">
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    @error('p13') <span class="text-danger">La pregunta es obligatoria. Favor de
                                        responderla.</span> @enderror

                                </li>




                                <li class="list-group-item">
                                    <span><b>14. ¿Ha tenido la impresión de que su vida se va a acortar, que va a morir
                                            antes que
                                            otras
                                            personas o que tiene un futuro limitado?</b></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Si" wire:model="p14"
                                            name="p14">
                                        <label class="form-check-label">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="No" wire:model="p14"
                                            name="p14">
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    @error('p14') <span class="text-danger">La pregunta es obligatoria. Favor de
                                        responderla.</span> @enderror

                                </li>



                                {{-- seccion IV de la encuesta
                                --}}
                                <li class="list-group-item">
                                    <blockquote>

                                        IV Afectación (durante el último mes):
                                    </blockquote>
                                </li>

                                <li class="list-group-item">
                                    <span><b>15. ¿Ha tenido usted dificultades para dormir?</b></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Si" wire:model="p15"
                                            name="p15">
                                        <label class="form-check-label">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="No" wire:model="p15"
                                            name="p15">
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    @error('p15') <span class="text-danger">La pregunta es obligatoria. Favor de
                                        responderla.</span> @enderror

                                </li>



                                <li class="list-group-item">
                                    <span><b>16. ¿Ha estado particularmente irritable o le han dado arranques de
                                            coraje?</b></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Si" wire:model="p16"
                                            name="p16">
                                        <label class="form-check-label">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="No" wire:model="p16"
                                            name="p16">
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    @error('p16') <span class="text-danger">La pregunta es obligatoria. Favor de
                                        responderla.</span> @enderror

                                </li>




                                <li class="list-group-item">
                                    <span><b>17. ¿Ha tenido dificultad para concentrarse?</b></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Si" wire:model="p17"
                                            name="p17">
                                        <label class="form-check-label">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="No" wire:model="p17"
                                            name="p17">
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    @error('p17') <span class="text-danger">La pregunta es obligatoria. Favor de
                                        responderla.</span> @enderror

                                </li>





                                <li class="list-group-item">
                                    <span><b>18. ¿Ha estado nervioso o constantemente en alerta?</b></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Si" wire:model="p18"
                                            name="p18">
                                        <label class="form-check-label">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="No" wire:model="p18"
                                            name="p18">
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    @error('p18') <span class="text-danger">La pregunta es obligatoria. Favor de
                                        responderla.</span> @enderror

                                </li>



                                <li class="list-group-item">
                                    <span><b>19. ¿Se ha sobresaltado fácilmente por cualquier cosa?</b></span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="Si" wire:model="p19"
                                            name="p19">
                                        <label class="form-check-label">
                                            Sí
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="No" wire:model="p19"
                                            name="p19">
                                        <label class="form-check-label">
                                            No
                                        </label>
                                    </div>
                                    @error('p19') <span class="text-danger">La pregunta es obligatoria. Favor de
                                        responderla.</span> @enderror

                                </li>

                            @endif


                        </ul>
                        @if (Auth::guard('empleados')->check())
                            <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-save"></i> Guardar
                                resultados</button>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
