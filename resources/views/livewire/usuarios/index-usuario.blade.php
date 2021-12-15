<div wire:init = "cargando">

    <div class="row">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                    <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                    aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </div>

            <div class="col-md-8">
                <div class="float-right mb-2">
                <a href="{{route('usuarios.crear')}}" type="button"
                    class="mb-3 btn-sm btn btn-success float-right"><i class="fa fa-plus-circle">
                        </i>Nuevo Registro</a>
            </div>
            </div>
        </div>


        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Foto</th>
                <th scope="col">Email</th>


              </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{$usuario->id}}</th>
                        <td scope="row">{{$usuario->nombreUsuario}}</td>
                        <th>
                            <img style="width:50px; height:50px;"
                            src="{{Storage::disk('public')->url($usuario->foto!=null ? $usuario->foto : 'images/img_usuarios/default.png')}}"
                            alt="">
                        </th>

                        <td scope="row">{{$usuario->email}}</td>

                        <td>
                            <a href="{{route('usuarios.vista', $usuario)}}" title="Mira mas informacion"
                            class="btn-sm btn btn-secondary"><i class="fa fa-eye"></i></a>

                            <a href="{{route('usuarios.editar', $usuario)}}" title="Modificar"
                            class="btn-sm btn btn-warning"><i class="fa fa-edit"></i></a>

                            <a href="{{route('usuarios.delete', $usuario)}}" title="Eliminar usuario"
                            class="btn-sm btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>




</div>
