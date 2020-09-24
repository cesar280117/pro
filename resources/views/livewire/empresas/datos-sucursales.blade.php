<ul class="users-list clearfix">
    @forelse ($sucursales as $key=>$sucursal)
        <li>
            <img style="width: 60px;height:60px" src="{{ asset('storage/' . $sucursal->logo_sucursal) }}" alt="">
            <a href="{{ Auth::user()->nombre_empresa ? route('sucursales.show-datos', $sucursal->id) : route('sucursales.show', $sucursal->id) }}"
                title="Centro de trabajo: {{ $sucursal->nombre_sucursal }}"
                class="users-list-name">{{ $sucursal->nombre_sucursal }}</a>
            <span class="users-list-date">Centro de trabajo 00{{ $key + 2 }}</span>
        </li>

    @empty
        <div class="alert alert-danger">
            no se encontraron sucursales registradas en dicha empresa.
        </div>
    @endforelse

</ul>
