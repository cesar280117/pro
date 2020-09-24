<div>
<div class="row">
    <div class="col-sm-5 mx-auto">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" style="width:150px;height:150px"
                        src="{{ asset('storage/' . $foto_temporal) }}" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center text-capitalize">{{ $nombre }}</h3>

                <p class="text-muted text-center">{{ $email }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>ID de usuario</b> <a class="float-right">{{ $id_usuario }}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Nombre de usuario</b> <a class="float-right">{{ $nombre }}</a>
                    </li>
                    
                    <li class="list-group-item">
                        <b>Email</b> <a class="float-right">{{ $email }}</a>
                    </li>
                </ul>

                <a href="/usuarios" class="btn btn-primary btn-block"><b><i class="fa fa-home"></i> Regresar</b></a>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>    
</div>

