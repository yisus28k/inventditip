<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Clientes;

class ClientesDatatable extends DataTableComponent
{
    protected $model = Clientes::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "name")
                ->sortable(),
            Column::make("Nombre del negocio", "business_name")
                ->sortable(),
            Column::make("Tipo de negocio", "negocio")
                ->sortable(),
            Column::make("Numero de telefono", "cell_phone")
                ->sortable(),
            Column::make("Direccion", "address")
                ->sortable(),
            Column::make("Colonia", "colonia")
                ->sortable(),
                Column::make("Horario", "horario")
                ->sortable(),
            ];
    }
}
