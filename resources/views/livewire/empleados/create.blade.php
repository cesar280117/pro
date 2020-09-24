<div>
    <form wire:submit.prevent="store">
        <div class="row">
            <div class="col-sm-11 mx-auto">
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <strong class="card-title">Crear nuevo empleado</strong>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body ">
                        @include('livewire.empleados.formulario')
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" wire:loading.attr="disabled" wire:target="foto_empleado" type="submit"><i
                                class="fa fa-save"></i> Registrar</button>
                        <a class="btn btn-danger" href="{{ route('empleados.index') }}"><i class="fa fa-ban"></i> Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
</div>