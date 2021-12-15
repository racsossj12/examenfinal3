<?php

namespace App\Http\Livewire\Teclados;

use App\Models\teclado;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class DeleteTeclado extends Component
{
    public function render()
    {
        return view('livewire.teclados.delete-teclado');
    }
    use WithFileUploads;
    public teclado $teclado;
    public $foto;



    public function eliminarTeclado(){
        $this->teclado->delete();
        Storage::disk('public')->delete($this->teclado->foto);
        return redirect(route('teclados'));
    }
}
