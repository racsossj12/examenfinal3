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
                <a href="{{route('ventas.crear')}}" type="button"
                    class="mb-3 btn-sm btn btn-success float-right"><i class="fa fa-plus-circle">
                        </i>Nuevo Registro de venta</a>
            </div>
            </div>
        </div>


        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th>Nombre de usuario</th>
                <th scope="col">teclado en venta</th>
                <th scope="col">Fecha de compra</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $venta)
                    <tr>
                        <th scope="row">{{$venta->id}}</th>
                        <td><span class="badge badge-primary">{{$venta->nombreUsuario}}</span></td>
                        <td><span class="badge badge-success">{{$venta->teclado}}</span></td>
                        <td><span class="badge badge-warning">{{$venta->created_at}}</span></td>
                        <td>
                            <a href="#" title="Mostrar más"
                            class="btn-sm btn btn-secondary"><i class="fa fa-eye"></i></a>

                            <a href="#" title="Editar/Modificar"
                            class="btn-sm btn btn-warning"><i class="fa fa-edit"></i></a>

                            <a href="#" title="Eliminar teclado seleccionado"
                            class="btn-sm btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>




</div>
