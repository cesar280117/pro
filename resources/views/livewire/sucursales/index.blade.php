<div>
    <div class="row">
        <div class="col-lg">
            <div class="card card-outline card-teal">
                <div class="card-header bg-white">
                    <h3 class="card-title">Sección de sucursales</h3>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            <h5>{{ session('status') }}</h5>
                        </div>

                    @endif
                    @include('livewire.busquedas.busquedas')
                    <div class="row d-flex align-items-stretch">
                        @forelse ($sucursales as $key=>$sucursal)

                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                <div class="card bg-light card-teal card-outline">
                                    <div class="card-header bg-light text-muted border-bottom-0">
                                        <span class="float-right badge badge-danger">Centro de trabajo:
                                            00{{ $key + 2 }}</span>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>{{ $sucursal->nombre_sucursal }}</b></h2>
                                                <p class="text-muted text-sm"><b>Contribuyente: </b>
                                                    {{ $sucursal->contribuyente }} </p>
                                                <p class="text-muted text-sm"><b>Giro de actividad: </b>
                                                    {{ $sucursal->giro_actividad }} </p>
                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                    <li class="small"><span class="fa-li"><i
                                                                class="fas fa-lg fa-building"></i></span> Domicilio:
                                                        {{ $sucursal->domicilio }}</li>
                                                    <li class="small"><span class="fa-li"><i
                                                                class="fas fa-lg fa-phone"></i></span> Telefono #:
                                                        {{ $sucursal->telefono }}</li>
                                                </ul>

                                            </div>
                                            <div class="col-5 text-center">
                                                <img style="width: 100px;height:100px"
                                                    src="{{ asset('storage/' . $sucursal->logo_sucursal) }}" alt=""
                                                    class="img-circle profile-user-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a title="Modificar los datos de la sucursal"
                                                href="{{ route('sucursales.edit-datos', $sucursal->id) }}"
                                                class="btn btn-sm bg-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a title="Vér los datos de la sucursal"
                                                href="{{ route('sucursales.show-datos', $sucursal->id) }}"
                                                class="btn btn-sm bg-teal">
                                                <i class="fa fa-eye"></i> Ver más
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="mx-auto">
                                <h5 class="text-danger">No se encuentran sucursales registradas</h5>
                            </div>
                        @endforelse


                    </div>
                </div>
                <div class="card-footer">
                    {{ $sucursales->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
