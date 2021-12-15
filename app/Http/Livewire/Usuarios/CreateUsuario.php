<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateUsuario extends Component
{
    public function render()
    {
        return view('livewire.usuarios.create-usuario');
    }
    use WithFileUploads;
    public usuario $usuario;
    public $foto;
    public $password;
    public $confirmar_password;

    public function mount(){
        $this->usuario = new usuario();
    }



    public function crearUsuario(){
        $this->validate();
        $this->usuario->password = Hash::make($this->password);
        if($this->foto!=null){
            $this->usuario->foto = Storage::disk('public')->put('images/img_usuarios', $this->foto);
        }
        $this->usuario->save();
        return redirect(route('usuarios'));
    }

    protected function rules(){
        return RulesUsuario::Reglas();
    }
}
