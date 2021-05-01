<?php

namespace App\Http\Controllers;

use App\Models\telefono;
use Illuminate\Http\Request;

class TelefonoController extends Controller
{
    public function editPhone()
    {
        if (!empty(session('id'))) {
            $listPhone = telefono::where('id_usuario', session('id'))->get();
            return view('user.editPhone', compact('listPhone'));
        } else {
            return redirect()->to('login/')->send();
        }
    }

    private function verTodo()
    {
        return telefono::all();
    }

    public function modifiedPhone($id)
    {
        $telefono = telefono::where('id', $id)->where('id_usuartio', session('id'))->get();
        if (count($telefono)) {
            return view('user.modifiedPhone', compact('telefono'));
        } else {
            return redirect()->to('/user/phone')->send();
        }
    }
}
