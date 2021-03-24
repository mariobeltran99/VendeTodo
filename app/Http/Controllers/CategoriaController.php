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
        return view('user.preferences', compact('listCategorie'));
    }
    public function admon()
    {
        $listCategorie = $this->verTodo();
        return view('cpanel.adminCategoria', compact('listCategorie'));
    }
    private function verTodo()
    {
        return categoria::all();
    }
    public function admonPreferences(Request $request)
    {
        session([
            'id' => 5,
            'rol' => "U"
        ]);
        return redirect()->to('home/')->send();
    }
    public function editCategory($id)
    {
        $listCategorie = categoria::find($id);
        return view('cpanel.editCategory', compact('listCategorie'));
    }
}
