<div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">

                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header "
                    style="  background-image: linear-gradient(to right, rgb(104, 185, 233) , rgb(188, 103, 236));">
                    <div class="widget-user-image">
                        <img style="width: 100px;height:100px" class="img-circle elevation-2 mr-3"
                            src="{{ asset('storage/' . $empresa->logo_empresa) }}" alt="foto de empresa">
                    </div>
                    <!-- /.widget-user-image -->
                    <a wire:click="login_empresa()" style="font-size: 20px"
                        class="widget-user-username h6 d-block text-uppercase">{{ $empresa->nombre_empresa . '(' . $empresa->domicilio.')' }}</a>
                    <h6 class="widget-user-desc text-uppercase">RFC: {{ $empresa->rfc }}</h6>
                </div>
                <div class="card-footer p-0">
                    <ul class="nav flex-column">
                        @forelse ($sucursales as $key=> $sucursal)
                            <li class="nav-item">
                                <span style="font-size: 13px" class="nav-link badge badge-danger">Centro de trabajo
                                    00{{ $key + 2 }}</span>
                                <a  wire:click="login_sucursal({{ $sucursal->id }})" style="font-size: 14px"
                                    class="nav-link text-uppercase">
                                    {{ $sucursal->nombre_sucursal }} ({{ $sucursal->domicilio }})
                                    <img style="width: 70px;height:70px; "
                                        class="img-circle float-right mb-2 profile-user-img"
                                        src="{{ asset('storage/' . $sucursal->logo_sucursal) }}" alt="imagen de sucursal">
                                </a>

                            </li>
                        @empty
                            <div class="alert alert-danger my-4">
                                La empresa no cuenta con sucursales
                            </div>
                        @endforelse


                    </ul>
                </div>
            </div>
            <!-- /.widget-user -->
        </div>
    </div>
</div>
