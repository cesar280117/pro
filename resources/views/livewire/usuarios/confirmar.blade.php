<div>
    <div class="row">
        <div class="col-sm-5 mx-auto">
            <div class="card card-outline card-danger">
                <div class="card-header">
                    <strong class="card-title">Confirmación</strong>
                </div>
                <div class="card-body">
                    <label class="text-muted " for="">Desea eliminar al usuario <span
                            class="text-capitalize">{{ $nombre }}</span> ?</label>
                </div>
                <div class="card-footer bg-white">
                    <button class="btn btn-danger" wire:click="destroy()"><i class="fa fa-trash"></i> Eliminar</button>
                    <a class="btn btn-secondary" href="/usuarios"><i class="fa fa-home"></i> Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>
