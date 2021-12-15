<div>
    <form wire:submit.prevent="crearVenta">
        <div class="row">

            <div class="mx-auto col-6">
                <div class="mb-3">
                    <label class="form-label">Usuario propietario del teclado</label>
                    <select wire:model="id_usuario" class="form-control">
                        @foreach ($usuarios as $usuario)
                            <option value="{{$usuario->id}}">{{$usuario->nombreUsuario}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">teclado</label>
                    <select wire:model="id_teclado" class="form-control">
                        @foreach ($teclados as $teclado)
                            <option value="{{$teclado->id}}">{{$teclado->marca}}</option>
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-success btn-sm">Guardar</button>
                <a href="{{route('ventas')}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
