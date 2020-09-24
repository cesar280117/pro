 <div class="row">
     <div class="col-lg-3">
         <div wire:loading wire:target="foto_empleado" class="form-group">
             <div class="d-flex align-items-center">
                 <strong>Cargando foto del empleado...</strong>
                 <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
             </div>
         </div>


         <div class="form-group">
             @if ($foto_empleado)
                 <img class="img-circle profile-user-img" style="width: 150px;height:150px"
                     src="{{ $foto_empleado->temporaryUrl() }}" alt="">
             @else
                 <img class="img-circle profile-user-img" style="width: 150px;height:150px"
                     src="{{ $foto_temporal != '' ? asset('storage/' . $foto_temporal) : asset('storage/images/empleados/default.png') }}"
                     alt="">

             @endif


         </div>
         <div class="form-group">
             <label> Foto del empleado</label>
             <input type="file" wire:model="foto_empleado" class="form-control-file">
         </div>

     </div>
     <div class="col-lg">
         <div class="row">
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Primer nombre</label>
                     <input type="text" wire:model="primer_nombre" class="form-control text-capitalize">
                     @error('primer_nombre') <span class="text-danger">{{ $message }}</span>@enderror
                 </div>
             </div>

             <div class="col-lg">
                 <div class="form-group">
                     <label> Segundo nombre</label>
                     <input type="text" wire:model="segundo_nombre" class="form-control text-capitalize">
                     @error('segundo_nombre') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>
             </div>
         </div>


         <div class="row">
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Apellido paterno</label>
                     <input type="text" wire:model="apellido_paterno" class="form-control text-capitalize">
                     @error('apellido_paterno') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label> Apellido materno</label>
                     <input type="text" wire:model="apellido_materno" class="form-control text-capitalize">
                     @error('apellido_materno') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>

         </div>

         <div class="row">
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Estado civil</label>
                     <select class="form-control" wire:model="estado_civil" id="">
                         <option></option>
                         <option>Soltero</option>
                         <option>Casado</option>
                         <option>Divorsiado
                         </option>
                         <option>
                             Separación en proceso judicial</option>
                         <option>Viudo</option>
                         <option>Concubinato</option>
                     </select>
                     @error('estado_civil') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>
             </div>


             <div class="col-lg">
                 <div class="form-group">
                     <label> Color de ojos</label>
                     <input type="text" wire:model="color_ojos" class="form-control">
                     @error('color_ojos') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label> Color de cabello</label>
                     <input type="text" wire:model="color_cabello" class="form-control">
                     @error('color_cabello') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
         </div>


         <div class="row">
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Peso</label>
                     <input type="number" wire:model="peso" step="any" class="form-control">
                     @error('peso') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Nacionalidad</label>
                     <input type="text" wire:model="nacionalidad" class="form-control">
                     @error('nacionalidad') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Estatura</label>
                     <input type="number" wire:model="estatura" step="any" class="form-control">
                     @error('estatura') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label> Religion</label>
                     @error('religion') <span class="text-danger">{{ $message }}</span>@enderror
                     <input type="text" wire:model="religion" step="any" class="form-control">
                 </div>

             </div>
         </div>


         <div class="row">
             <div class="col-lg">
                 <div class="form-group">
                     <label>Curp</label>
                     <input type="text" wire:model="curp" class="form-control text-uppercase ">
                     @error('curp') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Fecha de nacimiento</label>
                     <input type="date" wire:model="fecha_nacimiento" class="form-control">
                     @error('fecha_nacimiento') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
         </div>

         <div class="row">
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Lugar de nacimiento</label>
                     <input type="text" wire:model="lugar_nacimiento" class="form-control ">
                     @error('lugar_nacimiento') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> RFC</label>
                     <input type="text" wire:model="rfc" class="form-control">
                     @error('rfc') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
         </div>


         <div class="row">
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Domicilio</label>
                     <input type="text" wire:model="domicilio" class="form-control ">
                     @error('domicilio') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Email</label>
                     <input type="email" wire:model="email" class="form-control">
                     @error('email') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
         </div>


         <div class="row">
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Sexo</label>
                     <select wire:model="sexo" class="form-control">
                         <option></option>
                         <option>Masculino</option>
                         <option>Femenino</option>
                     </select>
                     @error('sexo') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label> Donador</label>
                     <select wire:model="donador" class="form-control">
                         <option></option>
                         <option>Si</option>
                         <option>No</option>
                     </select>
                     @error('donador') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>


         </div>

         <div class="row">
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Padecimientos medicos</label>
                     <select wire:model="padecimientos_medicos" class="form-control">
                         <option></option>
                         <option>Si</option>
                         <option>No</option>
                     </select>
                     @error('padecimientos_medicos') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>

             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Cuenta con algun tipo de alergia</label>
                     <select wire:model="alergia" class="form-control">
                         <option></option>
                         <option>Si</option>
                         <option>No</option>
                     </select>
                     @error('alergia') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
         </div>

         <div class="row">

             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Nivel de estudios</label>
                     <select wire:model="nivel_estudios" class="form-control">
                         <option></option>
                         <option>Primaria</option>
                         <option>Secundaria</option>
                         <option>Preparatoria o Bachillerato</option>
                         <option>Técnico Superior</option>
                         <option>Licenciatura</option>
                         <option>Maestría</option>
                         <option>Doctorado </option>
                     </select>
                     @error('nivel_estudios') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>

             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Ocupación</label>
                     <input type="text" wire:model="ocupacion" class="form-control ">
                     @error('ocupacion') <span class="text-danger">{{ $message }}</span>@enderror


                 </div>

             </div>

         </div>



         <div class="row">
             <div class="col-lg">
                 <div class="form-group">
                     <label> <span class="text-danger">*</span> Tipo de puesto</label>
                     <select wire:model="tipo_puesto" class="form-control">
                         <option></option>
                         <option>Operativo</option>
                         <option>Supervisor</option>
                         <option>Profesional</option>
                         <option>Tecnico</option>
                         <option>Gerente</option>
                     </select>
                     @error('tipo_puesto') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Departamento</label>
                     <input type="text" wire:model="departamento" class="form-control ">
                     @error('departamento') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>


             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Trabaja actualmente</label>
                     <select wire:model="trabaja_actualmente" class="form-control">
                         <option></option>
                         <option>Si</option>
                         <option>No</option>
                     </select>
                     @error('trabaja_actualmente') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
         </div>


         <div class="row">
             <div class="col-lg">
                 <div class="form-group">
                     <label> Inicio de Puesto en la empresa</label>
                     <input type="date" wire:model="inicio_puesto" class="form-control ">
                     @error('inicio_puesto') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Tipo de contratación</label>
                     <select wire:model="tipo_contratacion" class="form-control">
                         <option></option>
                         <option>Por obra o proyecto</option>
                         <option>Tiempo indeterminado</option>
                         <option>Por tiempo determinado </option>
                         <option>Por horarios</option>
                     </select>
                     @error('tipo_contratacion') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Tipo de Personal</label>
                     <select wire:model="tipo_personal" class="form-control">
                         <option></option>
                         <option>
                             Sindicalizado</option>
                         <option>Confianza
                         </option>
                         <option>Ninguno</option>
                     </select>
                     @error('tipo_personal') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
         </div>



         <div class="row">
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Jornada laboral</label>
                     <select wire:model="id_jornada" class="form-control">
                         <option></option>
                         @foreach ($jornadas as $jornada)
                             <option value="{{ $jornada->id }}">{{ $jornada->jornada }}</option>
                         @endforeach
                     </select>
                     @error('id_jornada') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Rotación de turnos</label>
                     <select wire:model="rotacion_turnos" class="form-control">
                         <option></option>
                         <option>Si</option>
                         <option>No</option>
                     </select>
                     @error('rotacion_turnos') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
         </div>

         <div class="row">

             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Experiencia (años):
                         Tiempo en el puesto actual
                     </label>
                     <select wire:model="experiencia_puesto_actual" class="form-control">
                         <option></option>
                         <option>
                             Menos de 6 meses</option>
                         <option>
                             Entre 6 meses y un año</option>
                         <option>
                             Entre 1 a 4 años </option>
                         <option>
                             Entre 5 a 9 años </option>
                         <option>
                             Entre 10 a 14 años </option>
                         <option>
                             Entre 15 a 19 años </option>
                         <option>
                             Entre 20 a 24 años </option>
                         <option>
                             Entre 55 años o más</option>
                     </select>
                     @error('experiencia_puesto_actual') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Tiempo experiencia laboral</label>
                     <select wire:model="experiencia_puesto_laboral" class="form-control">
                         <option></option>
                         <option>
                             Menos de 6 meses</option>
                         <option>
                             Entre 6 meses y un año</option>
                         <option>
                             Entre 1 a 4 años </option>
                         <option>
                             Entre 5 a 9 años </option>
                         <option>
                             Entre 10 a 14 años </option>
                         <option>
                             Entre 15 a 19 años </option>
                         <option>
                             Entre 20 a 24 años </option>
                         <option>
                             Entre 55 años o más</option>
                     </select>
                     @error('experiencia_puesto_laboral') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
         </div>



         <div class="row">
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Hace algun tipo de ejercicio</label>
                     <select wire:model="hace_ejercicio" class="form-control">
                         <option></option>
                         <option>Si</option>
                         <option>No</option>
                     </select>
                     @error('hace_ejercicio') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Salario</label>
                     <input type="number" wire:model="salario" class="form-control ">
                     @error('salario') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>



             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Estatus</label>
                     <select wire:model="estatus" class="form-control">
                         <option></option>
                         <option>Activo</option>
                         <option>Inactivo</option>
                         <option>Ninguno</option>
                     </select>
                     @error('estatus') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
         </div>

         <div class="row">
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> Nivel de pago</label>
                     <input type="text" wire:model="nivel_pago" class="form-control ">
                     @error('nivel_pago') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>
             <div class="col-lg">
                 <div class="form-group">
                     <label><span class="text-danger">*</span> División</label>
                     <input type="text" wire:model="division" class="form-control">
                     @error('division') <span class="text-danger">{{ $message }}</span>@enderror

                 </div>

             </div>

         </div>

         @if ($foto_temporal)
         <blockquote>
             <div class="row">
             <div class="col-md">
                 <div class="form-group">
                     <label>Password (en caso de modificar)</label>
                     <input type="password" wire:model='password' class="form-control">
                     @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                 </div>
             </div>
             <div class="col-md">
                 <div class="form-group">
                     <label >Confirmar password</label>
                     <input type="password" wire:model='confirmar_password' class="form-control">
                     @error('confirmar_password') <span class="text-danger">{{ $message }}</span> @enderror

                 </div>
             </div>
         </div>
         </blockquote>
             
         @endif
         


         <div class="card card-danger mt-4 card-outline">
             <div class="card-header">
                 <i class="fa fa-ambulance"></i> En caso de emergencia
             </div>
             <div class="card-body">
                 <div class="row">
                     <div class="col-lg">
                         <div class="form-group">
                             <label class="text-danger">Nombre</label>
                             <input type="text" wire:model="nombre_emergencia"
                                 title="Nombre de persona en caso de emergencia"
                                 class="border border-danger form-control">
                             @error('nombre_emergencia') <span class="text-danger">{{ $message }}</span>@enderror

                         </div>

                     </div>
                     <div class="col-lg">
                         <div class="form-group">
                             <label class="text-danger">Telefono</label>
                             <input type="tel" wire:model="telefono_emergencia"
                                 title="telefono de persona en caso de emergencia"
                                 class="form-control border border-danger">
                             @error('telefono_emergencia') <span class="text-danger">{{ $message }}</span>@enderror

                         </div>

                     </div>
                     <div class="col-lg">
                         <div class="form-group">
                             <label class="text-danger">Celular</label>
                             <input type="tel" wire:model="celular_emergencia"
                                 title="Celular de persona en caso de emergencia"
                                 class="form-control border border-danger">
                             @error('celular_emergencia') <span class="text-danger">{{ $message }}</span>@enderror

                         </div>
                     </div>

                 </div>
             </div>
         </div>


     </div>
 </div>
