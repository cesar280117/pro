<ul class="list-group list-group-unbordered my-3">
    <li class="list-group-item">
        <b>Nombre de la empresa</b> <span
            class="float-right">{{ $empresa->nombre_empresa }}</span>
    </li>
    <li class="list-group-item">
        <b>RFC de la empresa</b> <span class="float-right"><span
                class="badge badge-danger">{{ $empresa->id }}</span></span>
    </li>
    <li class="list-group-item">
        <b>Correo electronico</b> <span style="font-size:13px"
            class="float-right">{{ $empresa->email }}</span>

    </li>
    <li class="list-group-item">
        <b>Contribuyente</b> <span
            class="float-right">{{ $empresa->contribuyente }}</span>
    </li>
    <li class="list-group-item">
        <b>Domicilio</b> <span class="float-right">{{ $empresa->domicilio }}</span>
    </li>
    <li class="list-group-item">
        <b>Telefono</b> <span class="float-right">{{ $empresa->telefono }}</span>
    </li>
    <li class="list-group-item">
        <b>Giro de actividad</b> <span
            class="float-right">{{ $empresa->giro_actividad }}</span>
    </li>
    <li class="list-group-item">
        <b>Concepto general</b> <span
            class="float-right">{{ $empresa->concepto_general }}</span>
    </li>
    <li class="list-group-item ">
        <b>IMSS (Registro patronal)</b> <span
            class="float-right">{{ $empresa->ims }}</span>
    </li>
    <li class="list-group-item">
        <b>Registro 1</b> <span class="float-right">{{ $empresa->registro1 }}</span>
    </li>
    <li class="list-group-item">
        <b>Numero de registro 1</b> <span
            class="float-right">{{ $empresa->no_registro1 }}</span>
    </li>
    <li class="list-group-item">
        <b>Registro 2</b> <span class="float-right">{{ $empresa->registro2 }}</span>
    </li>
    <li class="list-group-item">
        <b>Numero de registro 2</b> <span
            class="float-right">{{ $empresa->no_registro2 }}</span>
    </li>
    <li class="list-group-item">
        <b>Registro 3</b> <span class="float-right">{{ $empresa->registro3 }}</span>
    </li>
    <li class="list-group-item">
        <b>Numero de registro 3</b> <span
            class="float-right">{{ $empresa->no_registro3 }}</span>
    </li>

</ul>