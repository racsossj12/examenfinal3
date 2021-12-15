<div>
    <form wire:submit.prevent="crearUsuario">
        <div class="row">


            <div wire:loading wire:target="foto" class="align-items-center">
                <strong>Loading...</strong>
                <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
              </div>

            <div class="col-4">
                <img style="width: 230px; height: 230px;"
                src="{{$foto!=null ? $foto->temporaryUrl() : Storage::disk('public')->url('images/img_usuarios/default.png')}}" alt="">
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
                  <label>Nombre del usuario</label>
                  <input wire:model="usuario.nombreUsuario" type="text" class="form-control">
                  @error('usuario.nombreUsuario') <span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>email</label>
                    <input wire:model="usuario.email" type="text" class="form-control">
                    @error('usuario.email') <span class="text-danger">{{ $message }}</span>@enderror
                  </div>

                <div class="form-group">
                  <label>password</label>
                  <input wire:model="password" type="text" class="form-control">
                  @error('password') <span class="text-danger">{{ $message }}</span>@enderror
                </div>


                <div class="form-group">
                    <label>Confirmar Password</label>
                    <input autocomplete="new-password" wire:model="confirmar_password" type="password" class="form-control">
                    @error('confirmar_password') <span class="text-danger">{{ $message }}</span>@enderror
                  </div>

                <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-success btn-sm">Guardar</button>
                <a href="{{route('usuarios')}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
