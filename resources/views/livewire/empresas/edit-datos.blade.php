<div>
    <form wire:submit.prevent="update">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card card-outline card-primary">
                    <div class="card-header bg-white">
                        <h3 class="card-title"><i class="fa fa-edit"></i> Modificar datos personales</h3>
                        @include('livewire.collapso.collapso')
                    </div>
                    <div class="card-body">
                        <div class="row">
                            
                            <div class="col-md-4">
                                <div wire:loading wire:target="logo_empresa">
                                    <div class="d-flex align-items-center">
                                        <div class="form-group">
                                            <strong>Cargando nueva imagen...</strong>
                                            <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="text-center">
                                        @if ($logo_empresa)
                                            <img class="img-circle profile-user-img" style="width: 150px;height:150px;"
                                                src="{{ $logo_empresa->TemporaryUrl() }}" alt="">
                                        @else
                                            <img class="img-circle profile-user-img" style="width: 150px;height:150px;"
                                                src="{{ asset('storage/' . $logo_temporal) }}" alt="">
                                        @endif

                                        <h3 class="profile-username">{{ $nombre_empresa }}</h3>
                                        <span class="text-muted">RFC ({{ $id_empresa }})</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label >Logo de la empresa</label>
                              <input type="file" wire:model="logo_empresa" class="form-control-file">
                                </div>

                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label>Nombre de la empresa</label>
                                    <input type="text" wire:model="nombre_empresa" class="form-control">
                                    @error('nombre_empresa') <span
                                        class="text-danger d-block">{{ $message }}</span>@enderror
                                </div>



                                <div class="form-group">
                                    <label>Domicilio</label>
                                    <input type="text" wire:model="domicilio" class="form-control">
                                    @error('domicilio') <span class="text-danger d-block">{{ $message }}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label>Telefono</label>
                                    <input type="tel" wire:model="telefono" class="form-control">
                                    @error('telefono') <span class="text-danger d-block">{{ $message }}</span>@enderror

                                </div>


                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" wire:model="email" class="form-control">
                                    @error('email') <span class="text-danger d-block">{{ $message }}</span>@enderror

                                </div>

                                <div class="form-group">

                                    <label>Password (en caso de querer modificar)</label>
                                    <input type="password" wire:model="password" class="form-control">
                                    @error('password') <span class="text-danger d-block">{{ $message }}</span>@enderror

                                </div>


                                <div class="form-group">
                                    <label>Confirmar password</label>
                                    <input type="password" wire:model="confirmar_password" class="form-control">
                                    @error('confirmar_password') <span
                                        class="text-danger d-block">{{ $message }}</span>@enderror

                                </div>

                            </div>
                        </div>











                        <button wire:loading.attr="disabled" wire:target="logo_empresa" type="submit"
                            class="btn btn-primary"><i class=" fa fa-edit"></i> Guardar
                            cambios</button>
                        <a href="{{ route('inicio') }}" class="btn btn-secondary"><i class=" fa fa-ban"></i> Cancelar
                            cambios</a>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
