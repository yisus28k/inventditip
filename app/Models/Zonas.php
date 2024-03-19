<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zonas extends Model
{
    protected $listeners =['refreshDatatable' => '$refresh'];
    protected $fillable = ['codigo', 'nombre', 'semana'];
}
