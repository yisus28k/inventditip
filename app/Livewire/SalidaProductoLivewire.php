<?php

namespace App\Livewire;

use App\Models\Productos;
use Livewire\Component;

class SalidaProductoLivewire extends Component
{
    public $productos;

    public function mount()
    {
        $this->productos = Productos::all();
    }
    public function render()
    {
        return view('livewire.salida-producto-livewire');
    }
}
