<?php

namespace App\Http\Controllers;

use App\Models\telefono;
use Illuminate\Http\Request;

class TelefonoController extends Controller
{
    public function editPhone()
    {
        $listPhone = telefono::where('id_usuario', '7')->get(); //RECORDAR CAMBIAR ESTO BRO
        //validar si va solo 1
        return view('editPhone', compact('listPhone'));
    }
    private function verTodo()
    {
        return telefono::all();
    }
}
