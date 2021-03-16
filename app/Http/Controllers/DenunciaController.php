<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\denuncia;

class DenunciaController extends Controller
{
    public function admon()
    {
        $listdenuncia = denuncia::where('vista', 0)->get(); //$this->verTodo(); //denuncia::where('vista', 0);
        return view('adminDenuncias', compact('listdenuncia'));
    }

    private function verTodo()
    {
        return denuncia::all();
    }
}
