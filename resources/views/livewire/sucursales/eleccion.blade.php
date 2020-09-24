<div>
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Alta de sucursales</h3>

                    <div class="card-tools">
                        <span class="badge badge-danger">Empresas registradas {{ $empresas->count() }}</span>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="alert alert-info">
                        Favor de seleccionar la empresa a la cual se le dara de alta la sucursal.
                    </div>
                    @include('livewire.busquedas.busquedas')

                    <ul class="users-list clearfix">
                        @forelse($empresas as $empresa)

                            <li>
                                <img style="width: 60px;height:60px" src="{{ asset('/storage/' . $empresa->logo_empresa) }}"
                                    alt="User Image">
                                <a class="users-list-name"
                                    href="{{ route('sucursales.create', $empresa->id) }}">{{ $empresa->nombre_empresa }}</a>
                                <span class="users-list-date">RFC: {{ $empresa->id }}</span>
                            </li>

                            
                        
                        @empty
                            <div class="alert alert">
                                <ul>
                                    <li>No se encuentra ninguna empresa</li>
                                </ul>
                            </div>
                        @endforelse
                    </ul>
                    <!-- /.users-list -->
                    <div class="mx-auto">
                        {{ $empresas->links() }}
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <a href="{{ route('sucursales.index') }}"><i class=" fa fa-home"></i> Regresar</a>
                </div>
                <!-- /.card-footer -->
            </div>

        </div>
    </div>

</div>
