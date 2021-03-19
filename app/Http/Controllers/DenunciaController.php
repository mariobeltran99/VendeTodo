<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\denuncia;

class DenunciaController extends Controller
{
    public function admon()
    {
        $listdenuncia = denuncia::where('vista', 0)->get();
        return view('cpanel.adminDenuncias', compact('listdenuncia'));
    }

    private function verTodo()
    {
        return denuncia::all();
    }
}
