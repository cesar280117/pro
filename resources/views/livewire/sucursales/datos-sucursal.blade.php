<ul class="list-group list-group-unbordered my-3">
    <li class="list-group-item">
        <b>Nombre de la sucursal</b> <span
            class="float-right">{{ $sucursal->nombre_sucursal }}</span>
    </li>

    <li class="list-group-item">
        <b>Correo electronico</b> <span style="font-size:13px"
            class="float-right">{{ $sucursal->email }}</span>

    </li>
    <li class="list-group-item">
        <b>Contribuyente</b> <span class="float-right">{{ $sucursal->contribuyente }}</span>
    </li>
    <li class="list-group-item">
        <b>Domicilio</b> <span class="float-right">{{ $sucursal->domicilio }}</span>
    </li>
    <li class="list-group-item">
        <b>Telefono</b> <span class="float-right">{{ $sucursal->telefono }}</span>
    </li>
    <li class="list-group-item">
        <b>Giro de actividad</b> <span class="float-right">{{ $sucursal->giro_actividad }}</span>
    </li>
    <li class="list-group-item">
        <b>Concepto general</b> <span class="float-right">{{ $sucursal->concepto_general }}</span>
    </li>
    <li class="list-group-item">
        <b>Numero de seguro social(IMSS)</b> <span class="float-right">{{ $sucursal->ims }}</span>
    </li>
    <li class="list-group-item">
        <b>Registro 1</b> <span class="float-right">{{ $sucursal->registro1 }}</span>
    </li>
    <li class="list-group-item">
        <b>Numero de registro 1</b> <span class="float-right">{{ $sucursal->no_registro1 }}</span>
    </li>
    <li class="list-group-item">
        <b>Registro 2</b> <span class="float-right">{{ $sucursal->registro2 }}</span>
    </li>
    <li class="list-group-item">
        <b>Numero de registro 2</b> <span class="float-right">{{ $sucursal->no_registro2 }}</span>
    </li>
    <li class="list-group-item">
        <b>Registro 3</b> <span class="float-right">{{ $sucursal->registro3 }}</span>
    </li>
    <li class="list-group-item">
        <b>Numero de registro 3</b> <span class="float-right">{{ $sucursal->no_registro3 }}</span>
    </li>
</ul>