<div>
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="card card-outline card-primary">
                @auth('web')
                    <div class="card-header bg-white">
                        @include('livewire.collapso.collapso')
                        <a href="{{ route('sucursales.confirmar', $sucursal->id) }}" class="btn btn-danger btn-sm"><i
                                class="fa fa-edit"></i></a>

                        <a href="{{ route('sucursales.edit', $sucursal->id) }}" title="Eliminar centro de trabajo"
                            class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Modificar datos</a>

                    </div>
                @endauth


                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="img-circle profile-user-img" style="width: 150px;height:150px"
                            src="{{ asset('storage/' . $sucursal->logo_sucursal) }}" alt="">
                    </div>
                    <h3 class="profile-username text-center text-uppercase">Sucursal {{ $sucursal->nombre_sucursal }}
                    </h3>
                    <p class="text-muted text-center">{{ $sucursal->email }}</p>
                    @include('livewire.sucursales.datos-sucursal')
                    <a class="btn btn-primary btn-block"
                        href="{{ Auth::user()->nombre_empresa ? route('sucursales.index') : route('empresas.show', $sucursal->rfc) }}"><i
                            class="fa fa-home"></i> Regresar</a>

                </div>
            </div>
        </div>
    </div>
</div>
