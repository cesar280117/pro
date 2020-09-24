<div>
    <div>
        <form wire:submit.prevent="login()">
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="card mx-auto card-primary card-outline">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-danger">
                                    <strong>{{ session('status') }}</strong>
                                </div>
                            @endif
                            <div class="text-center">
                                <h2 class="profile-username">inicio sesión</h2>
                                <img style="width:140px;height:140px" class="profile-user-img img-circle"
                                    src="{{ asset('storage/images/usuarios/default.png') }}" alt="">
                            </div>


                            <div class="form-group">
                                <label>Numero de empleado</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" wire:model="id_empleado">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                @error('id_empleado') <span class="text-danger">El campo número de empleado es requerido</span>@enderror

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <div class="input-group">
                                    <input type="password" wire:model="password" class="form-control">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                @error('password') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                            <button class="btn btn-primary btn-block" type="submit">Acceder</button>

                        </div>

                    </div>

                </div>
            </div>
        </form>
    </div>

</div>
