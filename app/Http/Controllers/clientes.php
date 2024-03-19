<?php

namespace App\Http\Controllers;

use App\Models\Clientes as ModelsClientes;
use Illuminate\Http\Request;

class clientes extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $clientes = new ModelsClientes();

        $clientes->name = $request->input('name');
        $clientes->business_name = $request->input('business_name');
        $clientes->negocio = $request->input('negocio');
        $clientes->cell_phone = $request->input('cell_phone');
        $clientes->address = $request->input('address');
        $clientes->colonia = $request->input('colonia');
        $clientes->horario = $request->input('horario');

        $clientes->save();

        return redirect('clientes');
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
