<div>
    <form wire:submit.prevent="update">
        <div class="row">
            <div class="col-lg-5 mx-auto">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h4 class="card-title">Modificar jornada laboral</h4>
                    </div>
                    <div class="card-body">
                        @include('livewire.jornadas.formulario')
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Modificar</button>
                        <a class="btn btn-danger" href="{{ route('jornadas.index') }}"><i class="fa fa-ban"></i> Cancelar</a>
      
                    </div>
                </div>
            </div>
        </div>
      </form>
      
</div>