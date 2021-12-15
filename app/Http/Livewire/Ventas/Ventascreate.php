<?php

namespace App\Http\Livewire\Ventas;

use App\Models\teclado;
use App\Models\usuario;
use App\Models\venta;
use Livewire\Component;

class Ventascreate extends Component
{

    public venta $venta;

    public function mount(){
        $this->venta = new Venta();
    }

    public function render()
    {
        $cursos = teclado::all();
        $usuarios = usuario::all();
        return view('livewire.ventas.ventascreate', compact('cursos', 'usuarios'));
    }

    public function crearVenta(){
        $this->validate();
        $this->venta->save();
        $this->emit('alerta-crear-venta', 'Se creo con exito la venta');

    }

    public function rules(){
      return Ventasrules::reglas();
    }
}



