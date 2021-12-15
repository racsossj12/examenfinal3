<?php

namespace App\Http\Livewire\Ventas;

use App\Models\venta;
use Livewire\Component;
use Livewire\WithPagination;

class Ventasindex extends Component
{    use WithPagination;
    public $search;
    public $cargado = false;
    public function render()

    {
        $ventas = ($this->cargado == true) ? venta::join('usuarios', 'ventas.id_usuario', '=', 'usuarios.id')
        ->join('teclados', 'id_teclado', '=', 'teclados.id')
        ->select('ventas.*',
            'usuarios.nombreUsuario',
            'usuarios.email',
            'teclados.marca',
        )->paginate(10) : [];
        return view('livewire.ventas.ventasindex', compact('ventas'));
    }


    public function updatingSearch(){
        $this->resetPage();
    }

    public function cargando(){
        $this->cargado = true;
    }
}
