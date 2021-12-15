<?php

namespace App\Http\Livewire\Teclados;

use App\Models\teclado;
use Livewire\Component;

class VistaTeclado extends Component
{
    public teclado $teclado;
    public $foto;
    public function render()
    {
        return view('livewire.teclados.vista-teclado');
    }
}
