<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Zonas;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Event;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;


class ZonasDatatable extends DataTableComponent
{
    protected $model = Zonas::class;

    
    public function configure(): void
    {
        $this->setPrimaryKey('id');

        Event::listen('eloquent.created: App\Models\Zonas', function () {
            $this->emit('refreshDatatable');
        });

        Event::listen('eloquent.updated: App\Models\Zonas', function () {
            $this->emit('refreshDatatable');
        });
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
            Column::make("Código", "codigo")
                ->sortable(),
            Column::make("Nombre", "nombre")
                ->sortable(),
            Column::make("Semana", "semana")
                ->sortable(),
        ];
    }
}
