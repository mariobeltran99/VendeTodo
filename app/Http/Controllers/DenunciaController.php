<?php

namespace App\Http\Controllers;

use App\Models\baneo;
use App\Models\usuario;
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
    public function createDenuncia($id)
    {
        if (session('id')) {
            return view('user.createDenuncia', compact('id'));
        } else {
            return redirect()->to('login/')->send();
        }
    }
    public function crearDenuncia(Request $request)
    {
        if (session('id')) {
            $denunn = new denuncia();
            $denunn->id_usuario_denunciado =$request->input("_id");
            $denunn->motivo=$request->descripcion;
            $denunn->vista=0;
            $denunn->save();
            return redirect()->to('/myArticules')->send()->with('alertaNormal', 'Su denuncia a sido interpuesta');
        } else {
            return redirect()->to('home/')->send();
        }
    }

    public function procesarDenuncia(Request $request){
        $denuncia = denuncia::find($request->input('_id'));
        $denuncia->vista=1;
        $denuncia->save();
        if ($request->baneado){
            $seraadmin=usuario::find($denuncia->id_usuario_denunciado);
            if ($seraadmin->rol != 'a') {
                $baneo = new baneo();
                $baneo->id_usuario = $denuncia->id_usuario_denunciado;
                $baneo->save();
                return redirect()->to('/admin/complaint')->send()->with('alertaError', 'Se ha baneado al usuario');
            } else {
                return redirect()->to('/admin/complaint')->send()->with('alertaError', 'Sin bans a los admins');
            }
        }
        return redirect()->to('/admin/complaint')->send()->with('alertaNormal', 'La denuncia se ha archivado');
    }
}
