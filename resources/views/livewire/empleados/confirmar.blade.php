<div>
    <div class="row">
        <div class="col-md-5 mx-auto">
            <form wire:submit.prevent="destroy">
                <div class="card card-danger card-outline">
                    <div class="card-header">
                        Confirmación
                    </div>
                    <div class="card-body">
                        <p class="card-text">Desea eliminar al empleado seleccionado?</p>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                        <a href="{{ route('empleados.index') }}" class="btn btn-secondary"><i class="fa fa-ban"></i>
                            Cancelar</a>

                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
