<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\clientes;
use App\Http\Controllers\ZonasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('category/{row}/edit', function () {
})->name('category.edit');

Route::get('category/{row}/eliminar', function () {
})->name('category.eliminar');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Rutas de productos
    Route::get('/addProduct', function () {
        return view('products.addProduct');
    })->name('addProduct');

    Route::get('/products', function () {
        return view('products.products');
    })->name('products');

    Route::post('addProduct', [ProductosController::class, 'store'])->name('productos.store');
    
    Route::post('category', [CategorysController::class, 'store'])->name('categorys.store');
    
    //Categoria
    Route::get('/category', function () {
        return view('products.category');
    })->name('category');

    //inventario
    Route::get('/addstock', function () {
        return view('inventario.AddStock');
    })->name('addstock');

    Route::get('/outproduct', function (){
        return view('ventas.outProduct');
    })->name('outproduct');
    
    Route::get('/inproduct', function (){
        return view('ventas.inProduct');
    })->name('inproduct');
    
    Route::get('/notaventa', function (){
        return view('ventas.noteSale');
    })->name('notaventa');
    
    //Clientes
    Route::get('/clientes', function () {
        return view('clientes.clientes');
    })->name('clientes');

    Route::get('/zonas', function () {
        return view('zonas.zonas');
    })->name('zonas');

    Route::post('clientes.store', [clientes::class, 'store'])->name('clientes.store');

    Route::post('zonas.store', [ZonasController::class, 'store'])->name('zonas.store');
});
