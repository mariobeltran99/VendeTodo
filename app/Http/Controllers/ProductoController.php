<?php

namespace App\Http\Controllers;

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
        return view('viewProduct', [
            'product' => $product
        ]);
    }
    public function myArticules()
    {
        return view('myArticules');
    }
    public function sell()
    {
        return view('sell');
    }
    public function editProduct(){
        return view('editProduct');
    }
}
