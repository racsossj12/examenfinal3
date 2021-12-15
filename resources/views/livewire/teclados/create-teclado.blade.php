<div>
    <form wire:submit.prevent="crearTeclado">
        <div class="row">


            <div wire:loading wire:target="foto" class="align-items-center">
                <strong>Loading...</strong>
                <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
              </div>

            <div class="col-4">
                <img style="width: 230px; height: 230px;"
                src="{{$foto!=null ? $foto->temporaryUrl() : Storage::disk('public')->url('images/img_teclados/default.png')}}" alt="">
                <form>
                    <div class="form-group">
                      <label>Subir Imagen</label>
                      <input wire:model="foto" type="file" class="form-control-file">
                      @error('foto') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                  </form>
            </div>

            <div class="mx-auto col-6">
                <div class="form-group">
                  <label>marca</label>
                  <input wire:model="teclado.marca" type="text" class="form-control">
                  @error('teclado.marca') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>categoria</label>
                    <input wire:model="teclado.categoria" type="text" class="form-control">
                    @error('teclado.categoria') <span class="text-danger">{{ $message }}</span>@enderror
                  </div>

                <div class="form-group">
                  <label>precio</label>
                  <input wire:model="teclado.precio" type="text" class="form-control">
                  @error('teclado.precio') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>switches</label>
                    <input wire:model="teclado.switches" type="text" class="form-control">
                    @error('teclado.switches') <span class="text-danger">{{ $message }}</span>@enderror
                  </div>

                <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-success btn-sm">Guardar</button>
                <a href="{{route('teclados')}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
