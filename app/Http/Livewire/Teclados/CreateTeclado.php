<?php

namespace App\Http\Livewire\Teclados;

use App\Models\teclado;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateTeclado extends Component
{
    public function render()
    {
        return view('livewire.teclados.create-teclado');
    }
    use WithFileUploads;
    public teclado $teclado;
    public $foto;

    public function mount(){
        $this->teclado= new teclado();
    }



    public function crearTeclado(){
        $this->validate();
        if($this->foto != null){
            $this->teclado->foto = Storage::disk('public')->put('images/img_teclados', $this->foto);
        }
        $this->teclado->save();
        return redirect(route('teclados'));
    }

    protected function rules(){
        return RulesTeclado::Reglas();
    }
}
