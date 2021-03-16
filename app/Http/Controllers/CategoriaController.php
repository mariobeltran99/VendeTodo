<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    //
    public function preferences()
    {
        $listCategorie = $this->verTodo();
        return view('preferences', compact('listCategorie'));
    }
    public function admon()
    {
        return view('adminCategoria');
    }
    private function verTodo()
    {
        return categoria::all();
    }
}
