<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\usuario;
use Livewire\Component;

class VistaUsuario extends Component
{
    public usuario $usuario;
    public $foto;
    public function render()
    {
        return view('livewire.usuarios.vista-usuario');
    }
}
