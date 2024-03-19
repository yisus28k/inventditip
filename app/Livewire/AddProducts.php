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
    public float $preciocompra = 0.0;
    public float $ganancia = 0.0;
    public float $precioventa = 0.0;
    public float $gananciapesos = 0.0;
    public $categoria;
    public $stock;
    public $stockminimo;

    use LivewireAlert;

    protected $listeners = ['updateSalePrice', 'updateGananciaPesos'];

    public function calcularPrecioVenta()
    {
        $this->precioventa = $this->preciocompra + ($this->preciocompra * $this->ganancia / 100);
        $this->gananciapesos = $this->precioventa - $this->preciocompra;
    }

    public function guardarProducto()
    {
        try {
            $this->validate(
                [
                    'codigo' => 'required|string|max:50|unique:productos,code',
                    'nombre' => 'required|string|max:50|unique:productos,name',
                    'presentacion' => 'required|string|max:50',
                    'preciocompra' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                    'ganancia' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                    'precioventa' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                    'gananciapesos' => 'required|regex:/^\d+(\.\d{1,2})?$/',
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
            $this->preciocompra = 0;
            $this->ganancia = 0;
            $this->precioventa = 0;
            $this->gananciapesos = 0;
            $this->categoria = '';
            $this->stock = '';
            $this->stockminimo = '';

        } catch (\Exception $e) {
            $this->alert('error', 'Error al guardar',[
                'position' => 'top-end',
                'timer' => '2000',
                'toast' => true,
                'timerProgressBar' => true,
                'width' => '200',
                'text' => '',
            ]);
        }
        
    }

    public function mount()
    {
        $this->categorys = Categorys::all();
    }



    public function render()
    {
        return view('livewire.add-products');
        
    }

}
