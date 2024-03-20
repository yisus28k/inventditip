<?php

namespace App\Livewire;

use App\Models\Categorys;
use App\Models\Productos;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddProducts extends Component
{
    public $categorys;

    public $codigo;
    public $nombre;
    public $presentacion;
    public $preciocompra;
    public $ganancia;
    public $precioventa;
    public $gananciapesos;
    public $categoria;
    public $stock;
    public $stockminimo;

    use LivewireAlert;

    public function mount()
    {
        $this->categorys = Categorys::all();
        $this->precioventa = 0; // Inicializar el precio de venta
        $this->gananciapesos = 0; // Inicializar la ganancia en pesos
    }

    public function updated($propertyName)
    {
        // Escuchar el evento emitido desde JavaScript
        if ($propertyName == 'precioventa' || $propertyName == 'gananciapesos') {
            $this->validate([
                $propertyName => 'required|numeric',
            ]);
        }
    }

    protected $listeners = ['calculateSalePrice', 'calculateganancia'];

    public function calculateSalePrice($salePrice)
    {
        dd($salePrice);
        $this->precioventa = $salePrice;
    }

    public function calculateganancia($gananciaPesos)
    {
        $this->gananciapesos = $gananciaPesos;
    }

    public function guardarProducto()
    {
        try {
            $this->validate(
                [
                    'codigo' => 'required|string|max:50|unique:productos,code',
                    'nombre' => 'required|string|max:50|unique:productos,name',
                    'presentacion' => 'required|string|max:50',
                    'preciocompra' => 'required|numeric',
                    'ganancia' => 'required|numeric',
                    'precioventa' => 'required|numeric',
                    'gananciapesos' => 'required|numeric',
                    'categoria' => 'required',
                    'stock' => 'required|numeric',
                    'stockminimo' => 'required|numeric',
                ],
                [
                    'codigo.unique' => 'El código ya existe',
                    'nombre.unique' => 'El nombre ya existe',
                ]
            );

            $codigo = strtoupper($this->codigo);
            $nombre = strtoupper($this->nombre);
            $presentacion = strtoupper($this->presentacion);

            Productos::create([
                'code' => $codigo,
                'name' => $nombre,
                'presentation' => $presentacion,
                'purchase_price' => $this->preciocompra,
                'ganancia' => $this->ganancia,
                'sale_price' => $this->precioventa,
                'ganancia_pesos' => $this->gananciapesos,
                'category' => $this->categoria,
                'stock' => $this->stock,
                'min_stock' => $this->stockminimo,
            ]);

            $this->alert('success', 'Producto guardado', [
                'position' => 'top-end',
                'timer' => '2000',
                'toast' => true,
                'timerProgressBar' => true,
                'width' => '250',
                'text' => '',
            ]);

            $this->codigo = '';
            $this->nombre = '';
            $this->presentacion = '';
            $this->preciocompra = '';
            $this->ganancia = '';
            $this->precioventa = '';
            $this->gananciapesos = '';
            $this->categoria = '';
            $this->stock = '';
            $this->stockminimo = '';
        } catch (\Exception $e) {
            $this->alert('error', 'Error al guardar', [
                'position' => 'top-end',
                'timer' => '2000',
                'toast' => true,
                'timerProgressBar' => true,
                'width' => '200',
                'text' => '',
            ]);
        }
    }

    public function render()
    {
        return view('livewire.add-products');
    }
}
