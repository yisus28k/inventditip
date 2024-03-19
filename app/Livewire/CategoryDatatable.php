<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;


use App\Models\Categorys;

class CategoryDatatable extends DataTableComponent
{
    protected $model = Categorys::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            ButtonGroupColumn::make('Acciones')
                ->attributes(function ($row) {
                    return [
                        'class' => 'space-x-2'
                    ];
                })
                ->buttons([
                    LinkColumn::make('Eliminar')
                        ->title(fn ($row) => 'Eliminar')
                        ->location(fn ($row) => route('category.eliminar', $row))
                        ->attributes(function ($row) {
                            return [
                                'class' => 'px-3 py-2'
                            ];
                        }),
                    LinkColumn::make('Edit')
                        ->title(fn ($row) => 'Editar')
                        ->location(fn ($row) => route('category.edit', $row))
                        ->attributes(function ($row) {
                            return [
                                'class' => 'px-3 py-2'
                            ];
                        }),
                ])
        ];
    }
}
