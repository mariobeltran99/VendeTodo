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
        if (!empty(session('id'))) {
            $telefono = telefono::where('id', $id)->where('id_usuario', session('id'))->get();
            if (count($telefono)) {
                return view('user.modifiedPhone', compact('telefono'));
            } else {
                return redirect()->to('/user/phone')->send();
            }
        } else {
            return redirect()->to('home/')->send();
        }
    }
    public function ActualizarTelefono(Request $request)
    {
        if (count(telefono::where('telefono',$request->input('phoneChange'))->where('id','!=',$request->input('_id'))->get()) == 0) {
            $telefono = telefono::findOrFail($request->input('_id'));
            $telefono->telefono = $request->input('phoneChange');
            $telefono->save();
            return redirect()->to('/user/phone/')->send()->with('alertaNormal', 'Su registro se actualizo con exito');
        } else {
            return redirect()->to('/user/editPhone/'.$request->input("_id"))->send()->with('alertaError', 'Su registro tiene conflictos');
        }
    }
    public function crearTelefono(Request $request){
        if (count(telefono::where('telefono',$request->input('telefono'))->get()) == 0) {
            $telefono = new telefono();
            $telefono->telefono=$request->input('telefono');
            $telefono->id_usuario=session('id');
            $telefono->save();
            return redirect()->to('/user/phone/')->send()->with('alertaNormal', 'Su registro se ha ingresado con exito');
        } else {
            return redirect()->to('/user/phone/')->send()->with('alertaError', 'Su registro tiene conflictos');
        }
    }
}
