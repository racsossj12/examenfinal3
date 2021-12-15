<?php

namespace App\Http\Livewire\Usuarios;

use Livewire\Component;

class RulesUsuario extends Component
{

    public static function Reglas($id = null){
        $validarPassword = ($id) ? 'nullable|min:8' : 'required|min:8';
        return[
            'usuario.nombreUsuario' => 'required|string',
            'foto' => 'nullable|image',
            'usuario.email' => 'required|email|unique:usuarios,email,'.$id,
            'password' => $validarPassword,
            'confirmar_password' => 'same:password',
        ];
    }
}
