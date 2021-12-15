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
                <a href="{{route('teclados.crear')}}" type="button"
                    class="mb-3 btn-sm btn btn-success float-right"><i class="fa fa-plus-circle">
                        </i>Nuevo Registro</a>
            </div>
            <div class="col-md-8">
                <div class="float-right mb-2">
                <a href="{{route('usuarios')}}" type="button"
                    class="mb-3 btn-sm btn btn-success float-right"><i class="fa fa-plus-circle">
                        </i>usuarios</a>
            </div>
            </div>
        </div>


        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Imagen</th>
                <th scope="col">Marca</th>
                <th scope="col">Categoria</th>
                <th scope="col">Precio</th>
                <th>switches</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($teclados as $teclado)
                    <tr>
                        <th scope="row">{{$teclado->id}}</th>
                        <th>
                            <img style="width:50px; height:50px;"
                            src="{{Storage::disk('public')->url($teclado->foto!=null ? $teclado->foto : 'images/img_teclados/default.png')}}"
                            alt="">
                        </th>
                        <td scope="row">{{$teclado->marca}}</td>
                        <td scope="row">{{$teclado->categoria}}</td>
                        <td scope="row">{{$teclado->precio}}</td>
                        <td scope="row">{{$teclado->switches}}</td>
                        <td>
                            <a href="{{route('teclados.vista', $teclado)}}" title="Mira mas informacion"
                            class="btn-sm btn btn-secondary"><i class="fa fa-eye"></i></a>

                            <a href="{{route('teclados.editar', $teclado)}}" title="Modificar"
                            class="btn-sm btn btn-warning"><i class="fa fa-edit"></i></a>

                            <a href="{{route('teclados.delete', $teclado)}}" title="Eliminar producto"
                            class="btn-sm btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>



    {{$teclados->links()}}
</div>
