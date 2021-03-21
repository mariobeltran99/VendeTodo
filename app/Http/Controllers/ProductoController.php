<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; //RECUERDA ELIMINARLO

use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\usuario;
use App\Models\telefono;
use App\Models\imagen;

class ProductoController extends Controller
{
    public function viewProduct($id)
    {
        $product = producto::where('id', $id)->get()->first();
        $telefono = telefono::where('id', $product->id_telefono)->get()->first();
        $product->user = usuario::where('id', $telefono->id_usuario)->get()->first();
        $imagen = imagen::where('id_producto', $product->id)->get();
        $product->telefono = $telefono;
        $product->imagen = $imagen;
        return view('Product.viewProduct', [
            'product' => $product
        ]);
    }
    public function myArticules()
    {
        $list = DB::select("SELECT p.id as 'idp' FROM productos p INNER JOIN telefonos t ON t.id = p.id_telefono INNER JOIN usuarios u ON u.id = t.id_usuario WHERE u.id = " . session('id'));
        return view('Product.myArticules', compact('list'));
    }
    public function sell()
    {
        $listt = telefono::where('id_usuario', session('id'))->get();
        return view('Product.sell', compact('listt'));
    }
    public function editProduct($id)
    {
        $listp = producto::find($id);
        $listt = telefono::where('id_usuario', session('id'))->get();
        return view('Product.editProduct', compact('listp', 'listt'));
    }
}
