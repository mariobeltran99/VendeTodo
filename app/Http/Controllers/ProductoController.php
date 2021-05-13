<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Support\Facades\DB; //RECUERDA ELIMINARLO

use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\usuario;
use App\Models\telefono;
use App\Models\imagen;
use App\Models\valoracion;

class ProductoController extends Controller
{
    public function viewProduct($id)
    {
        $product = producto::where('id', $id)->get()->first();
        $telefono = telefono::where('id', $product->id_telefono)->get()->first();
        $product->user = usuario::where('id', $telefono->id_usuario)->get()->first();
        $imagen = imagen::where('id_producto', $product->id)->get();
        $valoracion = valoracion::where('id_producto', $product->id)->get();
        $average = valoracion::where('id_producto', $id)->pluck('estrella')->avg();
        $product->telefono = $telefono;
        $product->imagen = $imagen;
        $product->valoracion = $valoracion;
        $product->average = $average;
        for ($i = 0; $i < count($product->valoracion); $i++) {
            $product->valoracion[$i]->id_usuario;
            $userr = usuario::find($product->valoracion[$i]->id_usuario);
            $product->valoracion[$i]->nombre = $userr->nombre;
        }
        return view('Product.viewProduct', [
            'product' => $product
        ]);
    }
    public function myArticules()
    {
        if (!empty(session('id'))) {
            $list = DB::select("SELECT p.id as 'idp' FROM productos p INNER JOIN telefonos t ON t.id = p.id_telefono INNER JOIN usuarios u ON u.id = t.id_usuario WHERE u.id = " . session('id'));
            return view('Product.myArticules', compact('list'));
        } else {
            return redirect()->to('login/')->send();
        }
    }
    public function sell()
    {
        if (!empty(session('id'))) {
            $listt = telefono::where('id_usuario', session('id'))->get();
            $listl = categoria::all();
            return view('Product.sell', compact('listt','listl'));
        } else {
            return redirect()->to('login/')->send();
        }
    }
    public function productoNuevo(Request $request)
    {
        if ($request->file('imagenperfil') != "") {
            $producto = new producto();
            $producto->id_telefono=$request->message1;
            $producto->id_categoria=$request->message2;
            $producto->precio=$request->price;
            $producto->nombre=$request->name;
            $producto->negociable=$request->has(negociable);
            $producto->descripcion=$request->descripcion;
            $producto->existencia=$request->dispo;
            $image = $request->file('imagenperfil');
            $nombre = time() . "_" . $image->getClientOriginalName();
            $image->move('storage', $nombre);
            $producto->save();
        } else {
            return redirect()->to('/sell')->send()->with('alertaError', 'No se puede subir sin imagenes');
        }
    }
    public function editProduct($id)
    {
        if (!empty(session('id'))) {
            $list = DB::select("SELECT p.id as 'idp' FROM productos p INNER JOIN telefonos t ON t.id = p.id_telefono INNER JOIN usuarios u ON u.id = t.id_usuario WHERE u.id = " . session('id') . " and p.id = " . $id);
            if (count($list) != 0) {
                $listp = producto::find($id);
                $listt = telefono::where('id_usuario', session('id'))->get();
                return view('Product.editProduct', compact('listp', 'listt'));
            } else {
                return redirect()->to('myArticules/')->send();
            }
        } else {
            return redirect()->to('login/')->send();
        }
    }
}
