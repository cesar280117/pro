<div>
    <div class="row">
        <div class="col-lg">
            <div class="card card-outline card-teal">
                <div class="card-header bg-white">
                    <h3 class="card-title">Sección de empresas</h3>
                    <a href="{{ route('empresas.create') }}" class="btn btn-success float-right"><i
                            class="fa fa-plus-circle"></i>
                        Nuevo</a>

                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-primary">
                            <h5>{{ session('status') }}</h5>
                        </div>
                    @endif
                    @include('livewire.busquedas.busquedas')
                    <div class="row d-flex align-items-stretch">
                        @foreach ($empresas as $empresa)
                            <?php $sucursales = DB::connection('mysql2')
                            ->table('sucursales')
                            ->where('id_empresa', $empresa->id)
                            ->get(); ?>
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                <div class="card bg-light card-teal card-outline">
                                    <div class="card-header bg-light text-muted border-bottom-0">
                                        <small><b>RFC: </b>{{ $empresa->id }}</small> <span
                                            class="float-right badge badge-danger">Sucursales
                                            {{ $sucursales->count() }}</span>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>{{ $empresa->nombre_empresa }}</b></h2>
                                                <p class="text-muted text-sm"><b>Contribuyente: </b>
                                                    {{ $empresa->contribuyente }} </p>
                                                <p class="text-muted text-sm"><b>Giro de actividad: </b>
                                                    {{ $empresa->giro_actividad }} </p>

                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                    <li class="small"><span class="fa-li"><i
                                                                class="fas fa-lg fa-building"></i></span> Domicilio:
                                                        {{ $empresa->domicilio }}</li>
                                                    <li class="small"><span class="fa-li"><i
                                                                class="fas fa-lg fa-phone"></i></span> Telefono #:
                                                        {{ $empresa->telefono }}</li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img style="width: 100px;height:100px"
                                                    src="{{ asset('storage/' . $empresa->logo_empresa) }}" alt=""
                                                    class="img-circle profile-user-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a title="Eliminar empresa"
                                                href="{{ route('empresas.confirm', $empresa->id) }}"
                                                class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>

                                            <a title="modificar datos de la empresa"
                                                href="{{ route('empresas.edit', $empresa->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('empresas.show', $empresa->id) }}"
                                                class="btn btn-sm bg-teal">
                                                <i class="fa fa-eye"></i> Ver más
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
                <div class="card-footer">
                    {{ $empresas->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
