<div>
    <form wire:submit.prevent="destroy">
        <div class="row">
            <div class="col-sm-5 mx-auto">
                <div class="card card-outline card-danger">
                    <div class="card-header">
                        <strong class="card-title">Confirmación</strong>
                    </div>
                    <div class="card-body">
                        <label>Desea dar de baja la sucursal seleccionada?</label>
                    </div>
                    <div class="card-footer bg-white">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                        <a class="btn btn-secondary" href="{{ route('empresas.show',$sucursal->id_empresa) }}"><i class="fa fa-ban"></i>
                            Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
