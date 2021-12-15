<?php

namespace App\Http\Livewire\Teclados;

use App\Models\teclado;
use Livewire\Component;
use Livewire\WithPagination;

class IndexTeclado extends Component
{
    public function render()
    {
        $teclados =  teclado::paginate(20);

        return view('livewire.teclados.index-teclado', compact('teclados'));
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
