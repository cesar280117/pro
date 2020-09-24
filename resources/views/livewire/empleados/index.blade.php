<div>
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Empleados de la empresa</strong>
            <div class="float-right">
                <a  href="{{ route('empleados.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i>
                    Nuevo</a>
            </div>
        </div>
        <div class="card-body">
            @include('livewire.busquedas.busquedas')
            @if (session('status'))
                <div class="alert alert-success">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
            <table class="table text-center table-striped table-inverse table-responsive-md">
                <thead>
                    <tr>
                        <th>Id empleado</th>
                        <th>Nombre(s)</th>
                        <th>Apellido materno</th>
                        <th>Apellido paterno</th>
                        <th>Sexo</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                        <tr>
                            <td scope="row">
                                <h4 class="badge badge-pill badge-primary">{{ $empleado->id }}</h4>
                            </td> 
                            <td>{{ $empleado->primer_nombre .' '.$empleado->segundo_nombre }}</td>
                            <td>{{ $empleado->apellido_paterno }}</td>
                            <td>{{ $empleado->apellido_materno }}</td>
                            <td>{{ $empleado->sexo }}</td>
                            <td><img style="width: 50px;height:50px" class="rounded-circle"
                                    src="{{ asset('storage/' . $empleado->foto_empleado) }}" alt="No cuenta"></td>
                            <td>
                                <a class="btn btn-primary mb-1" href="{{ route('empleados.edit',$empleado->id) }}"
                                    title="Modificar"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-info mb-1"  href="{{ route('empleados.show',$empleado->id) }}" title="Ver"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-danger mb-1"  href="{{ route('empleados.confirmar',$empleado->id) }}"
                                    title="Eliminar"><i class="fa fa-trash"></i></a>

                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $empleados->links() }}
        </div>

    </div>
</div>
