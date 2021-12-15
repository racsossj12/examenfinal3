<div>
    <div class="card mx-auto" style="width: 18rem;">
        @if ($foto != null)
            <img style="width: 286px; height: 286px;" class="mx-auto card-img-top"
                    src="{{Storage::disk('public')->url($teclado->foto)}}" alt="Card image cap">
        @else
                <img style="width: 286px; height: 286px;"
                src="{{Storage::disk('public')->url($teclado->foto != null ? $teclado->foto : 'images/img_teclados/default.png')}}"
                alt="">
        @endif

        <div class="card-body">
            <h5 class="card-title text-center">{{$teclado->marca}}</h5>
            <p class="card-title text-center">{{$teclado->categoria}}</p>
            <p class="card-title text-center">{{$teclado->switches}}</p>
            <button wire:click="eliminarTeclado" class="btn btn-danger btn-sm">Confirmar</button>
            <a href="{{route('teclados')}}" class="btn btn-secondary btn-sm">Cancelar</a>
      </div>
</div>
