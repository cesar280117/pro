<div>
    <form wire:submit.prevent="store">
        <div class="row">
            <div class="col-lg-5 mx-auto">
                <div class="card card-outline card-success">
                    <div class="card-header">
                        <h4 class="card-title">Registro de jornadas laborales</h4>
                    </div>
                    <div class="card-body">
                        @include('livewire.jornadas.formulario')
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
                        <a class="btn btn-danger" href="{{ route('jornadas.index') }}"><i class="fa fa-ban"></i> Cancelar</a>
    
                    </div>
                </div>
            </div>
        </div>
    </form>
    
</div>