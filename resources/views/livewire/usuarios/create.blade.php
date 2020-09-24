<div>
    <form wire:submit.prevent="store()">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Crear nuevo usuario</h3>
                </div>
                <div class="card-body">
                    @include('livewire.usuarios.formulario')
                </div>
                <div class="card-footer">
                    <button wire:loading.attr="disabled" wire:target="foto" type="submit"
                        class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
                    <a href="{{ route('usuarios.index') }}" class="btn btn-danger"><i class="fa fa-ban"></i> Cancelar</a>
                </div>
            </div>

        </div>
    </div>

</form>
</div>

