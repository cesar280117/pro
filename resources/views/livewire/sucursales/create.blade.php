<div>
    <form wire:submit.prevent="store()">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <div class="card card-outline card-success">
                    <div class="card-header">
                        <h3 class="card-title">Registro de sucursal</h3>
                    </div>
                    <div class="card-body">
                        @include('livewire.sucursales.formulario')
                    </div>
                    <div class="card-footer">
                        <button wire:loading.attr="disabled" wire:target="logo_sucursal" class="btn btn-success"
                            type="submit"><i class="fa fa-save"></i> Guardar</button>
                        <a class="btn btn-danger" href="{{ route('empresas.show',$id_empresa) }}"><i class="fa fa-ban"></i> Cancelar</a>
    
                    </div>
                </div>
            </div>
        </div>
    
    
    </form>
    
</div>