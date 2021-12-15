<div>
    <div class="card mx-auto" style="width: 18rem;">

        <div class="card-body">
          <h5 class="card-title">{{$usuario->nombreUsuario}}</h5>
          <p class="card-title">{{$usuario->email}}</p>

          <a href="{{route('usuarios')}}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>
</div>
