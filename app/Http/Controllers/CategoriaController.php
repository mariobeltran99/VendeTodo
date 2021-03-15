<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    //
    public function preferencias()
    {
        return view('layout'); //Le cambias alli ÛuÛ
    }
    public function admon()
    {
        return view('adminCategoria');
    }
}
