<?php

namespace App\Livewire;

use App\Models\Productos;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;

class ListaPrecios extends Component
{
    public $productos;
    public function mount()
    {
        $this->productos = Productos::all();
    }

    public function render()
    {
        return view('livewire.lista-precios');
    }
}
