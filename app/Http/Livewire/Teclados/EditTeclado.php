<?php

namespace App\Http\Livewire\Teclados;

use App\Models\teclado;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditTeclado extends Component
{
    public function render()
    {
        return view('livewire.teclados.edit-teclado');
    }
    use WithFileUploads;
    public teclado $teclado;
    public $foto;



    public function editarTeclado(){
        $this->validate();
        if($this->foto != null){
            if($this->curso->foto != null){
                Storage::disk('public')->delete($this->teclado->foto);
            }
            $this->curso->foto = Storage::disk('public')->put('images/img_teclados', $this->foto);
        }
        $this->curso->save();
        return redirect(route('teclados'));
    }

    protected function rules(){
        return RulesTeclado::Reglas();
    }
}
