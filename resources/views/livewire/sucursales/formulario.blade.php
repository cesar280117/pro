<div class="row">
    <div class="col-lg-3">
        <div wire:loading wire:target="logo_sucursal" class="form-group">
            <div class="d-flex align-items-center">
                <strong>Cargando logo de la sucursal...</strong>
                <div class="spinner-border spinner-border-sm text-info ml-auto" role="status" aria-hidden="true"></div>
            </div>
        </div>

        <div class="form-group">
            @if ($logo_sucursal)
                <img class="img-circle profile-user-img" style="width: 150px;height:150px;"
                    src="{{ $logo_sucursal->temporaryUrl() }}" alt="No cuenta con imagen">
            @else
                <img class="img-circle profile-user-img" style="width: 150px;height:150px;"
                    src="{{ $logo_temporal ? asset('storage/' . $logo_temporal) : asset('storage/images/sucursales/default.png') }}"
                    alt="No cuenta con imagen">
            @endif
        </div>
        <div class="form-group">
            <label>Logo de la sucursal</label>
            <input type="file" class="form-control-file" wire:model="logo_sucursal">
        </div>
    </div>
    <div class="col-lg">
        <div class="row">
           
            <div class="col-lg">
                <div class="form-group">
                    <label><span class="text-danger">*</span> Nombre de la sucursal</label>
                    <input type="text" class="form-control" wire:model="nombre_sucursal">
                    @error('nombre_sucursal') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-lg">
                <div class="form-group">
                    <label><span class="text-danger">*</span> Contribuyente</label>
                    <select class="form-control" wire:model="contribuyente">
                        <option></option>
                        <option>Persona física</option>
                        <option>Persona moral</option>
                    </select>
                    @error('contribuyente') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            @if ($contribuyente == 'Persona física')
                <div class="col-lg">
                    <div class="form-group">
                        <label> CURP</label>
                        <input type="text" class="form-control" wire:model="curp">
                        @error('curp') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            @endif

        </div>




        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label><span class="text-danger">*</span> Domicilio completo</label>
                    <input type="text" class="form-control" wire:model="domicilio">
                    @error('domicilio') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-lg">
                <div class="form-group">
                    <label><span class="text-danger">*</span> Telefono</label>
                    <input type="tel" class="form-control" wire:model="telefono">
                    @error('telefono') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>

        </div>



        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label><span class="text-danger">*</span> Giro de actividad</label>
                    <select class="form-control" wire:model="giro_actividad">
                        <option></option>
                        <option>Comercio</option>
                        <option>Servicios</option>
                        <option>Industria de Transformación</option>
                        <option>Servicios profesionales</option>
                        <option value=" ">Otros</option>
                    </select>
                    @error('giro_actividad') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>

            @if ($giro_actividad != 'Comercio' && $giro_actividad != 'Servicios' && $giro_actividad != 'Industria de Transformación' && $giro_actividad != 'Servicios profesionales' && $giro_actividad != '')
                <div class="col-lg">
                    <div class="form-group">
                        <label><span class="text-danger">*</span> Ingrese el giro de actividad</label>
                        <input type="text" wire:model="giro_actividad" class="form-control">
                        @error('giro_actividad') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            @endif

            <div class="col-lg">
                <div class="form-group">
                    <label><span class="text-danger">*</span>
                        {{ $giro_actividad != 'Comercio' && $giro_actividad != 'Servicios' && $giro_actividad != 'Industria de Transformación' && $giro_actividad != 'Servicios profesionales' && $giro_actividad != '' ? 'IMSS' : ' Numero de seguro social (IMSS)' }}</label>
                    <input type="number" wire:model="ims" class="form-control">
                    @error('ims') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>


        </div>


        <h4 class="text-muted">Otros registros</h4>
        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label> A)</label>
                    <input type="text" class="form-control" wire:model="registro1">
                    @error('registro1') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label> No: </label>
                    <input type="number" class="form-control" wire:model="no_registro1">
                    @error('no_registro1') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label> B)</label>
                    <input type="text" class="form-control" wire:model="registro2">
                    @error('registro2') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label> No: </label>
                    <input type="number" class="form-control" wire:model="no_registro2">
                    @error('no_registro2') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label> C)</label>
                    <input type="text" class="form-control" wire:model="registro3">
                    @error('registro3') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="col-lg-2">
                <div class="form-group">
                    <label> No: </label>
                    <input type="number" class="form-control" wire:model="no_registro3">
                    @error('no_registro3') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label><span class="text-danger">*</span> Concepto general de actividad</label>
                    <textarea class="form-control" wire:model="concepto_general" cols="30" rows="10"></textarea>
                    @error('concepto_general') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>

        </div>

        
        <div class="card card-outline card-info">
            <div class="card-header bg-white">
                <h3 class="card-title "><i class="fa fa-user"></i> Datos de sesión</h3>
            </div>
            <div class="card-body">
                <div class="alert alert-danger">
                    <span>Los siguientes datos se utilizaran para poder iniciar sesión en la sucursal</span>
                
                </div>
                <div class="row">

                    <div class="col-lg">
                        <div class="form-group">
                            <label> <span class="text-danger">*</span> Correo electronico</label>
                            <input type="email" class="form-control" wire:model="email">
                            @error('email') <span class="text-danger">El campo de correo electronico es obligatorio</span>@enderror
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="form-group">
                            <label> <span class="text-danger">*</span>
                                {{ $id_sucursal ? 'Password (en caso de querer modificar)' : 'password' }}</label>
                            <input type="password" class="form-control" wire:model="password">
                            @error('password') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    @if ($password)
                        <div class="col-lg">
                            <div class="form-group">
                                <label><span class="text-danger">*</span> Confirmar password </label>
                                <input type="password" class="form-control" wire:model="confirmar_password">
                                @error('confirmar_password') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    @endif
        
                </div>
            </div>

        </div>
        
    </div>
</div>
