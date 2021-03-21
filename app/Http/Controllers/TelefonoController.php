<?php

namespace App\Http\Controllers;

use App\Models\telefono;
use Illuminate\Http\Request;

class TelefonoController extends Controller
{
    public function editPhone()
    {
        $listPhone = telefono::where('id_usuario', session('id'))->get();
        return view('user.editPhone', compact('listPhone'));
    }
    private function verTodo()
    {
        return telefono::all();
    }
    public  function modifiedPhone($id)
    {
        $telefono = telefono::find($id);
        return view('user.modifiedPhone', compact('telefono'));
    }
}
