<div>
    <form wire:submit.prevent="update">
        <div class="row">
            <div class="col-sm-11 mx-auto">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <strong class="card-title">Modificar empleado</strong>
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
                        <button class="btn btn-primary" wire:loading.attr="disabled" wire:target="foto_empleado"
                            type="submit"><i class="fa fa-edit"></i> Modificar</button>
                            <a class="btn btn-danger active" href="{{ route('empleados.index') }}"><i class="fa fa-ban"></i> Cancelar</a>
                        </div>
                </div>
            </div>
        </div>
    </form>
    
</div>