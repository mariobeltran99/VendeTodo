<?php

namespace App\Http\Controllers;

use App\Models\baneo;
use Illuminate\Http\Request;
use App\Models\denuncia;

class DenunciaController extends Controller
{
    public function admon()
    {
        if (session('rol') == 'A') {
            $listdenuncia = denuncia::where('vista', 0)->get();
            return view('cpanel.adminDenuncias', compact('listdenuncia'));
        } else {
            return redirect()->to('home/')->send();
        }
    }

    private function verTodo()
    {
        return denuncia::all();
    }
    public function procesarDenuncia(Request $request){
        $denuncia = denuncia::find($request->input('_id'));
        $denuncia->vista=1;
        $denuncia->save();
        if ($request->baneado){
            $baneo= new baneo();
            $baneo->id_usuario=$denuncia->id_usuario_denunciado;
            $baneo->save();
            return redirect()->to('/admin/complaint')->send()->with('alertaError', 'Se ha baneado al usuario');
        }
        return redirect()->to('/admin/complaint')->send()->with('alertaNormal', 'La denuncia se ha archivado');
    }
}
