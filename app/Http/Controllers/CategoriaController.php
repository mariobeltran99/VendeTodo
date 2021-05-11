<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;


class CategoriaController extends Controller
{
    public function preferences()
    {
        $listCategorie = $this->verTodo();
        return view('user.preferences', compact('listCategorie'));
    }
    public function admon()
    {
        if (session('rol') == 'A') {
            $listCategorie = $this->verTodo();
            return view('cpanel.adminCategoria', compact('listCategorie'));
        } else {
            return redirect()->to('home/')->send();
        }
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
        if (session('rol') == 'A') {
            $listCategorie = categoria::find($id);
            return view('cpanel.editCategory', compact('listCategorie'));
        } else {
            return redirect()->to('home/')->send();
        }
    }
    public function actualizarCategoria(Request $request){
        if (count(categoria::where('nombre',$request->input('nombre'))->where('id','!=',$request->input('_id'))->orWhere('descripcion',$request->input('descripcion'))->get()) == 0) {
            $categoria = categoria::findOrFail($request->input('_id'));
            $categoria->nombre=$request->nombre;
            $categoria->descripcion=$request->descripcion;
            $categoria->save();
            return redirect()->to('/admin/category/')->send()->with('alertaNormal', 'Su registro se actualizo con exito');
        } else {
            return redirect()->to('/admin/editCategory/'.$request->input("_id"))->send()->with('alertaError', 'Su registro tiene conflictos');
        }
    }
    public function crearCategoria(Request $request){
        if (count(categoria::where('nombre',$request->input('nombre'))->orWhere('descripcion',$request->input('descripcion'))->get()) == 0) {
            $categoria = new categoria();
            $categoria->nombre=$request->nombre;
            $categoria->descripcion=$request->descripcion;
            $categoria->save();
            return redirect()->to('/admin/category/')->send()->with('alertaNormal', 'Su registro se ha ingresado con exito');
        } else {
            return redirect()->to('/admin/category/')->send()->with('alertaError', 'Su registro tiene conflictos');
        }
    }
}
