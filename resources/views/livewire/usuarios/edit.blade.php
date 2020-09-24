<div>
    <form wire:submit.prevent="update()">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Modificar usuario</h3>
                    </div>
                    <div class="card-body">
                        @include('livewire.usuarios.formulario')
                    </div>
                    <div class="card-footer">
                        <button wire:loading.attr="disabled" type="submit" wire:target="foto"
                            class="btn btn-primary"><i class="fa fa-edit"></i> Modificar</button>
                        <a href="/usuarios" class="btn btn-danger"><i class="fa fa-ban"></i> Cancelar</a>
    
                    </div>
                </div>
    
            </div>
        </div>
    </form>
</div>
