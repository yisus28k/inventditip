<?php

namespace App\Livewire;

use App\Models\Clientes;
use Livewire\Component;

class CatalogoClientes extends Component
{

    public $name = '';

    public $business_name = '';

    public $negocio = '';

    public $cell_phone = '';

    public $address = '';

    public $colonia = '';

    public $horario = '';

    public function save()
    {
        
        // imprime los datos que se estan enviando
        dd($this->name, $this->business_name, $this->negocio, $this->cell_phone, $this->address, $this->colonia, $this->horario);    
    }

    public function render()
    {
        return view('livewire.catalogo-clientes');
    }
}
