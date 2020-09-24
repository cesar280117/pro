<div class="row">
    <div class="col-sm-5 mx-auto">
        <form wire:submit.prevent="destroy">
            <div class="card card-danger card-outline">
                <div class="card-header">
                    <h3 class="card-title">Confirmación</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">Desea eliminar la jornada laboral ?</p>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                    <a class="btn btn-secondary" href="{{ route('jornadas.index') }}"><i class="fa fa-ban"></i>
                        Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>
