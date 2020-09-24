<div>
  <div class="row">
    <div class="col-lg-4">
        <div wire:loading wire:target="foto" class="form-group">
            <div class="d-flex align-items-center">
                <strong>Cargando imagen...</strong>
                <div class="spinner-border ml-auto" role="status" aria-hidden="true">
                </div>
            </div>
        </div>

        @if ($foto)
            <div class="form-group">
                <img src="{{ $foto->temporaryUrl() }}" class="img-circle profile-user-img" style="width:150px;height:150px"
                    alt="">
            </div>
        @else
            <div class="form-group">
                <img src="{{ $foto_temporal == '' ? asset('storage/images/usuarios/default.png') : asset('storage/' . $foto_temporal) }}"
                    class="profile-user-img img-circle" style="width:150px;height:150px" alt="">
            </div>
        @endif

        <div class="form-group">
            <label>Foto de usuario</label>
            <input type="file" class="form-control-file" wire:model="foto">
        </div>
    </div>
    <div class="col-lg">
        <div class="form-group">
            <label>Nombre de usuario</label>
            <input type="text" class="form-control" wire:model="nombre">
            @error('nombre') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span>@enderror

        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" wire:model="password">
            @error('password') <span class="text-danger">{{ $message }}</span>@enderror

        </div>

        <div class="form-group">
            <label>Confirmar password</label>
            <input type="password" class="form-control" wire:model="confirmar_password">
            @error('confirmar_password') <span class="text-danger">{{ $message }}</span>@enderror

        </div>
    </div>
</div>  
</div>

