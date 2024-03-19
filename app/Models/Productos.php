<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = [
        'code',
        'name',
        'presentation',
        'purchase_price',
        'sale_price',
        'ganancia',
        'category',
        'ganancia_pesos',
        'stock',
        'min_stock',
    ];
}
