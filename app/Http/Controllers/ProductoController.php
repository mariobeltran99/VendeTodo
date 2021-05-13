<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Support\Facades\DB; //RECUERDA ELIMINARLO

use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\usuario;
use App\Models\telefono;
use App\Models\valoracion;

class ProductoController extends Controller
{
    public function viewProduct($id)
    {
        if (!empty(session('id'))) {
            $product = producto::where('id', $id)->get()->first();
            $telefono = telefono::where('id', $product->id_telefono)->get()->first();
            $product->user = usuario::where('id', $telefono->id_usuario)->get()->first();
            $valoracion = valoracion::where('id_producto', $product->id)->get();
            $average = valoracion::where('id_producto', $id)->pluck('estrella')->avg();
            $product->id = $id;
            $product->telefono = $telefono;
            $product->valoracion = $valoracion;
            $product->average = $average;
            for ($i = 0; $i < count($product->valoracion); $i++) {
                $userr = usuario::find($product->valoracion[$i]->id_usuario);
                $product->valoracion[$i]->nombre = $userr->nombre;
            }
            return view('Product.viewProduct', [
                'product' => $product
            ]);
        } else {
            return redirect()->to('login/')->send();
        }
    }
    public function myArticules()
    {
        if (!empty(session('id'))) {
            $list = DB::select("SELECT p.id as 'idp', p.nombre as 'nombrep',p.descripcion as 'descripcionp',p.foto as 'fotop' FROM productos p INNER JOIN telefonos t ON t.id = p.id_telefono INNER JOIN usuarios u ON u.id = t.id_usuario WHERE u.id =" . session('id'));
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
    public function renderProductHome(Request $request)
    {
        $salid = "";
        $cosas = producto::join('telefonos','telefonos.id','=','productos.id_telefono')->join('usuarios','usuarios.id','=','telefonos.id_usuario')->where('productos.nombre','like',$request->texto."%")->where('productos.existencia','!=','0')->where('usuarios.activo','1')->take(3)->select('productos.id','productos.nombre','productos.precio','productos.foto',)->get();
        if (count($cosas) != 0) {
            $salid = "<style>
            .img-box {
                display: block;
                max-width:300px;
                max-height:180px;
                width: auto;
                height: auto;
            }
            </style>";
            foreach ($cosas as $key) {
                $salid .= '
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                <div>
                    <div class="p-56">
                        <div class="w-96 m-auto ">
                            <div class=" grid grid-cols-3 grid-rows-7 grid-flow-row overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                                <div class="col-span-3 row-span-4 p-1 m-1 content-around">
                                    <a href="/viewProduct/' . $key->id . '">
                                        <img
                                            src="/storage/' . $key->foto . '"
                                            class="rounded-xl img-box mx-auto"
                                        />
                                    </a>
                                </div>
                                <div class="col-span-3 row-span-1">
                                    <p class="text-grey-darker text-sm px-2 md:px-4 text-right text-2xl">$' . $key->precio . '</p>
                                </div>
                                <div class="col-span-3 row-span-1">
                                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                        <p class="text-lg text-justify">
                                            <a class="no-underline hover:underline  text-black" href="/viewProduct/' . $key->id . '">
                                                ' . $key->nombre . '
                                            </a>
                                        </p>
                                    </header>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            }
        }else{
            $salid .= "<h1>No hay articulos relacionados</h1>";
        }
        return $salid;
    }
    public function renderProduct($id)
    {
        if (!empty(session('id'))) {
            $listp = producto::join('telefonos', 'telefonos.id', '=', 'productos.id_telefono')->join('usuarios', 'usuarios.id', '=', 'telefonos.id_usuario')->where('productos.id_categoria', $id)->where('productos.existencia', '!=', '0')->where('usuarios.activo', '1')->select('productos.id', 'productos.nombre', 'productos.precio', 'productos.foto',)->get();
            return view('Product.productCat', compact('listp'));
        } else {
            return redirect()->to('login/')->send();
        }
    }
    public function productoNuevo(Request $request)
    {
        if ($request->file('imagenperfil') != "") {
            if ($request->message1 != "") {
                if ($request->message2 != "") {
                    $producto = new producto();
                    $producto->id_telefono = $request->message1;
                    $producto->id_categoria = $request->message2;
                    $producto->precio = $request->price;
                    $producto->nombre = $request->name;
                    $request->negociable = ($request->negociable)?"1":"0";
                    $producto->negociable = $request->negociable;
                    $producto->descripcion = $request->descripcion;
                    $producto->existencia = $request->dispo;
                    $image = $request->file('imagenperfil');
                    $nombre = time() . "_" . $image->getClientOriginalName();
                    $image->move('storage', $nombre);
                    $producto->foto = $nombre;
                    $producto->save();
                    return redirect()->to('/sell')->send()->with('alertaNormal', 'Su producto ha sido publicado');
                } else {
                    return redirect()->to('/sell')->send()->with('alertaError', 'Por favor espere que se ingresen categorias');
                }
            } else {
                return redirect()->to('/sell')->send()->with('alertaError', 'Ingrese un numero telefonico');
            }
        } else {
            return redirect()->to('/sell')->send()->with('alertaError', 'No se puede subir sin imagenes');
        }
    }
    public function editoProducto(Request $request)
    {
        $producto = producto::find($request->input("_id"));
        $producto->id_telefono = $request->message1;
        $producto->id_categoria = $request->message2;
        $producto->precio = $request->price;
        $producto->nombre = $request->name;
        $request->negociable = ($request->negociable)?"1":"0";
        $producto->negociable = $request->negociable;
        $producto->descripcion = $request->descripcion;
        $producto->existencia = $request->dispo;
        if ($request->file('imagenperfil') != "") {
            $image = $request->file('imagenperfil');
            $nombre = time() . "_" . $image->getClientOriginalName();
            $image->move('storage', $nombre);
            $producto->foto = $nombre;
        }
        $producto->save();
        return redirect()->to('/myArticules')->send()->with('alertaNormal', 'Su producto ha sido actualizado');
    }
    public function editProduct($id)
    {
        if (!empty(session('id'))) {
            $list = DB::select("SELECT p.id as 'idp' FROM productos p INNER JOIN telefonos t ON t.id = p.id_telefono INNER JOIN usuarios u ON u.id = t.id_usuario WHERE u.id = " . session('id') . " and p.id = " . $id);
            if (count($list) != 0) {
                $listp = producto::find($id);
                $listt = telefono::where('id_usuario', session('id'))->get();
                $listl = categoria::all();
                return view('Product.editProduct', compact('listp', 'listt', 'listl'));
            } else {
                return redirect()->to('myArticules/')->send();
            }
        } else {
            return redirect()->to('login/')->send();
        }
    }
    //SEGUNDA PARTE DEL PRODUCTO
}
