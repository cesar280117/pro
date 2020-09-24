    <div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Sección de usuarios</h3>
            <div class="float-right">
                <a href="{{ route('usuarios.create') }}" class="btn btn-success"><i class="fa fa-save"></i> Nuevo</a>
            </div>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif

            @include('livewire.busquedas.busquedas')
            <table class="table text-center table-striped table-responsive-md">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>nombre de usuario</th>
                        <th>Email</th>
                        <th>imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td> <span class="badge badge-secondary">{{ $usuario->id }}</span></td>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td><img style="width: 60px;height:60px" class="img-circle"
                                    src="{{ asset('storage/' . $usuario->foto) }}"
                                    alt="No cuenta con foto el usuario"></td>
                            <td>
                                <a class="btn btn-primary mb-1" href="{{ route('usuarios.edit',$usuario->id) }}"  title="Modificar"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-info mb-1" href="{{ route('usuarios.show',$usuario->id) }}"  title="Ver más"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-danger mb-1"  href="{{ route('usuarios.confirm',$usuario->id) }}"  title="Eliminar"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $usuarios->links() }}
        </div>
    </div>
    </div>

