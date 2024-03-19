<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Productos;
use Rappasoft\LaravelLivewireTables\Views\Filters\MultiSelectFilter;

class ProductosDatatable extends DataTableComponent
{
    protected $model = Productos::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("CÓDIGO", "code")
                ->sortable(),
            Column::make("CATEGORÍA", "category")
                ->sortable(),
            Column::make("NOMBRE", "name")
                ->sortable(),
            Column::make("PRESENTACIÓN", "presentation")
                ->sortable(),
            Column::make("PRECIO DE COMPRA", "purchase_price")
                ->sortable(),
            Column::make("PRECIO DE VENTA", "sale_price")
                ->sortable(),
            Column::make("GANANCIA", "ganancia")
                ->sortable(),
            Column::make("GANANCIA EN PESOS", "ganancia_pesos")
                ->sortable(),
            Column::make("STOCK", "stock")
                ->sortable(),

        ];
    }
}
