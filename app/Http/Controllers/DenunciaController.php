<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\denuncia;

class DenunciaController extends Controller
{
    public function admon()
    {
        if (session('rol') == 'A') {
            $listdenuncia = denuncia::where('vista', 0)->get();
            return view('cpanel.adminDenuncias', compact('listdenuncia'));
        } else {
            return redirect()->to('home/')->send();
        }
    }

    private function verTodo()
    {
        return denuncia::all();
    }
}
