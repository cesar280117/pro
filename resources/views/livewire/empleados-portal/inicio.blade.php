<div>
    <div class="row">
        <div class="col-md">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
                <div class="progress" style="height: 20px;">
                    <div class="progress-bar  {{ $resultado == 100 ? 'bg-success' : 'bg-danger' }}" role="progressbar"
                        style="width: {{ $resultado }}%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="3">
                        {{ $resultado }}% de guias realizadas</div>
                </div>
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-light">
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2 mr-3 profile-user-img" style="width: 130px;height:130px;"
                            src="{{ asset('storage/' . Auth::user()->foto_empleado) }}" alt="User Avatar">
                    </div>
                    <!-- /.widget-user-image -->
                    <h4 class="widget-user-username">
                        {{ Auth::user()->primer_nombre . ' ' . Auth::user()->segundo_nombre . ' ' . Auth::user()->apellido_paterno . ' ' . Auth::user()->apellido_materno }}
                    </h4>
                    <h5 class="widget-user-desc">Número de empleado ({{ Auth::user()->id }})</h5>
                </div>

                <div class="card-body p-0 mt-4">
                    @include('livewire.empleados-portal.secciones')


                </div>
            </div>
            <!-- /.widget-user -->
        </div>


    </div>



</div>
