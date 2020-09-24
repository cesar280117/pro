<div>
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Jornadas laborales</strong>
            <a href="{{ route('jornadas.create') }}" class="btn btn-success float-right"><i
                    class="fa fa-plus-circle"></i>
                Nuevo</a>

            <div class="float-right">
            </div>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
            @include('livewire.busquedas.busquedas')
            <table class="table table-striped text-center table-inverse table-responsive-md">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hora inicial</th>
                        <th>Hora final</th>
                        <th>jornada</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jornadas as $jornada)
                        <tr>
                            <td scope="row">{{ $jornada->id }}</td>
                            <td>{{ $jornada->hora_inicial }}</td>
                            <td>{{ $jornada->hora_final }}</td>
                            <td><span style="font-size: 13px"
                                    class="badge badge-pill badge-secondary">{{ $jornada->jornada }}</span> </td>
                            <td>
                                <a class="btn btn-primary mb-1" href="{{ route('jornadas.edit', $jornada->id) }}"
                                    title="Modificar"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger mb-1" href="{{ route('jornadas.confirmar', $jornada->id) }}"
                                    title="Eliminar"><i class="fa fa-trash"></i></a>

                            </td>


                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $jornadas->links() }}
        </div>

    </div>
</div>
