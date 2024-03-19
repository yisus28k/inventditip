<?php

namespace App\Http\Controllers;
use App\Models\categorys;

use Illuminate\Http\Request;

class CategorysController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        $categorys = new categorys();

        $categorys->name = $request->input('nombre');

        $categorys->save();

        return view('products.category');
    }
}
