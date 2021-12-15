<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\usuario;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUsuario extends Component
{
    public function render()
    {
        $usuarios = usuario::paginate(20);
        return view('livewire.usuarios.index-usuario',compact('usuarios'));
    }

    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $search;
    public $cargado = false;



    public function updatingSearch(){
        $this->resetPage();
    }

    public function cargando(){
        $this->cargado = true;
    }
}
