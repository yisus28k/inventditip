<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Zonas;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Rappasoft\LaravelLivewireTables\Traits\WithEvents as TraitsWithEvents;

class CatalogoZonas extends Component
{
    public $codigo;
    public $nombre;
    public $semana;

    use TraitsWithEvents;
    use LivewireAlert;

    public function guardarZona()
    {
        try {
            $this->validate(
                [
                    'codigo' => 'required|string|max:50|unique:zonas,codigo',
                    'nombre' => 'required|string|max:50|unique:zonas,nombre',
                    'semana' => 'required|integer',
                ],
                [
                    'codigo.unique' => 'El código ya existe',
                    'nombre.unique' => 'El nombre ya existe',
                ]
            );

            $codigo = strtoupper($this->codigo);
            $nombre = strtoupper($this->nombre);

            Zonas::create([
                'codigo' => $codigo,
                'nombre' => $nombre,
                'semana' => $this->semana,
            ]);

            $this->alert('success', 'Zona guardada', [
                'position' => 'top-end',
                'timer' => '2000',
                'toast' => true,
                'timerProgressBar' => true,
                'width' => '250',
                'text' => '',
            ]);

            $this->codigo = '';
            $this->nombre = '';
            $this->semana = '';

        } catch (\Exception $e) {
            $this->alert('error', 'Error al guardar la zona', [
                'position' => 'top-end',
                'timer' => '2000',
                'toast' => true,
                'timerProgressBar' => true,
                'width' => '250',
                'text' => '',
            ]);
        }
    }
    public function render()
    {
        return view('livewire.catalogo-zonas');
    }
}
