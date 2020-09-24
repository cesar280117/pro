<div>
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="card card-primary card-outline">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item "><a class="nav-link active" href="#empresa" data-toggle="tab">Datos de la
                                empresa</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#sucursales" data-toggle="tab">Sucursales</a>
                        </li>

                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="text-center">
                        <img style="width: 160px;height:160px;" class="img-circle profile-user-img"
                            src="{{ asset('storage/' . $empresa->logo_empresa) }}" alt="">
                    </div>
                    <h4 class="profile-username text-center text-uppercase">
                        {{ $empresa->nombre_empresa }}</h4>
                    <p class="text-muted text-center">RFC ({{ $empresa->rfc }} )</p>


                    <div class="tab-content">
                        {{-- datos de la empresa--}}

                        <div class="tab-pane active" id="empresa">
                            @include('livewire.empresas.datos-empresa')
                            <a class="btn btn-block btn-primary"
                                href="{{ Auth::user()->nombre_empresa ? route('inicio') : route('empresas.index') }}"><i
                                    class="fa fa-home"></i>
                                Regresar</a>
                        </div>
                        {{-- datos de sucursales --}}
                        <div class="tab-pane" id="sucursales">
                            @include('livewire.empresas.datos-sucursales')
                            @auth('web')
                                <div class="text-center my-2">
                                    <a href="{{ route('sucursales.create', $empresa->id) }}"><i class="fa fa-save"></i>
                                        Registar
                                        nueva sucursal</a>

                                </div>

                            @endauth



                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
