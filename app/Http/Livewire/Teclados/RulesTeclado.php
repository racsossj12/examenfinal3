<?php

namespace App\Http\Livewire\Teclados;

use Livewire\Component;

class RulesTeclado extends Component
{ public static function Reglas(){
    return[
        'teclado.marca' => 'required|string',
        'teclado.categoria' => 'required|string',
        'teclado.precio' => 'numeric|required',
        'teclado.switches' => 'required|string',
        'foto' => 'nullable|image'
    ];
}
}
