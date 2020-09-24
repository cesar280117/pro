<div>
    <form wire:submit.prevent="update()">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Modificacón de la empresa</h3>
                    </div>
                    <div class="card-body">
                        @include('livewire.empresas.formulario')
                    </div>
                    <div class="card-footer">
                        <button wire:loading.attr="disabled" wire:target="logo_empresa" class="btn btn-primary"
                            type="submit"><i class="fa fa-edit"></i> Modificar</button>
                        <a class="btn btn-danger active" href="{{ route('empresas.index') }}"><i class="fa fa-ban"></i> Cancelar</a>
    
                    </div>
                </div>
            </div>
        </div>
    
    
    </form>
    
</div>