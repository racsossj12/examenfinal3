<?php

namespace App\Http\Livewire\Ventas;

use Livewire\Component;

class Ventasrules extends Component
{
    public static function reglas(){
    return [
        'venta.id_usuario'=>'required',
        'venta.id_curso'=>'required',
    ];
}
}


