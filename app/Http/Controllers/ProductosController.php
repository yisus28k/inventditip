<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // enviar a la base de datos
        $producto = new Productos();

        $producto->code = $request->input('code');
        $producto->name = $request->input('name');
        $producto->ganancia_pesos = $request->input('ganancia_pesos');
        $producto->presentation = $request->input('presentation');
        $producto->purchase_price = $request->input('purchase_price');
        $producto->ganancia = $request->input('ganancia');
        $producto->sale_price = $request->input('sale_price');
        $producto->category = $request->input('category');
        $producto->stock = $request->input('stock');
        $producto->min_stock = $request->input('stock_min');

        $producto->save();

        return view('products.addProduct');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function pdf()
    {
        $productos = Productos::all();
        return view('listaPrecios', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
