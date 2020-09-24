<div>
    <div class="row">
        <div class="col-md">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
                @if (session('status'))
                    <div class="alert alert-success">
                        <h3>{{ session('status') }}</h3>
                    </div>
                @endif
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
                    <h5  class="widget-user-desc">Número de empleado ({{ Auth::user()->id }})</h5>
                </div>

                <div class="card-body mt-4">
                    <div class="row">
                        <div class="col-md-9">

                            <!-- guia 1 -->
                            <a href="{{ $guia1 == 0 ? route('guias.no1') : '#' }}"
                                title="CUESTIONARIO PARA IDENTIFICAR A LOS TRABAJADORES QUE FUERON SUJETOS A ACONTECIMIENTOS TRAUMÁTICOS SEVEROS">
                                <div class="info-box mb-3 {{ $guia1 == 0 ? 'bg-danger' : 'bg-success' }}">
                                    <span class="info-box-icon"><i
                                            class="{{ $guia1 == 0 ? 'fa fa-times' : 'fa fa-thumbs-up' }}"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">GUÍA DE REFERENCIA I</span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                            </a>



                            <!-- /guia2 -->
                            <a href="{{ $guia2 == 0 ? route('guias.no2') : '#' }}"                                title="CUESTIONARIO PARA IDENTIFICAR LOS FACTORES DE RIESGO PSICOSOCIAL EN LOS CENTROS DE TRABAJOhref="">
                                <div class=" info-box mb-3 {{ $guia2 == 0 ? 'bg-danger' : 'bg-success' }}">
                                <span class="info-box-icon"><i
                                        class="{{ $guia2 == 0 ? 'fa fa-times' : 'fa fa-thumbs-up' }}"></i></span>

                                <div class="info-box-content">
                                    <span " class=" info-box-text">GUÍA DE REFERENCIA II</span>
                                </div>
                                <!-- /.info-box-content -->
                        </div>
                        </a>

                        <!-- /.guia3-->
                        <a href="{{ $guia3 == 0 ? route('guias.no3') : '#' }}"
                            title="CUESTIONARIO PARA IDENTIFICAR LOS FACTORES DE RIESGO PSICOSOCIAL Y EVALUAR EL ENTORNO ORGANIZACIONAL EN LOS CENTROS DE TRABAJO">
                            <div class="info-box mb-3 {{ $guia3 == 0 ? 'bg-danger' : 'bg-success' }}">
                                <span class="info-box-icon"><i
                                        class="{{ $guia3 == 0 ? 'fa fa-times' : 'fa fa-thumbs-up' }}"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">GUÍA DE REFERENCIA III</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                        </a>






                    </div>

                    <div class="col-md">

                        <span class="d-block"><i class="fa fa-circle text-danger"></i> Pendientes</span>
                        <span class="d-block"><i class="fa fa-circle text-success"></i> Realizadas</span>
                        <span class="d-block"
                            title="Si se encuentra en estado inactiva, contate con el jefe de área o recursos humanos para poder activar dicha guia "><i
                                class="fa fa-circle text-warning"></i> Inactivas</span>
                    </div>
                </div>


            </div>
        </div>
        <!-- /.widget-user -->
    </div>


</div>

</div>
