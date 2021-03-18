<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class UsuarioController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function home()
    {
        return view('home');
    }
    public function viewUsers()
    {
        return view('adminUsers');
    }
    public function editUser()
    {
        $arrayUser = usuario::find(session('id'));
        return view('editUser', compact('arrayUser'));
    }
    public function loginRegister(Request $request)
    {
        if ($this->existEmail($request->name)) {
            return view('login', [
                'email' => $request->name
            ]);
        } else {
            return view('register', [
                'email' => $request->name
            ]);
        }
    }
    private function existEmail($email)
    {
        $array = usuario::where('nombre_usuario', $email)->get();
        if (count($array) != 0) {
            return true;
        } else {
            return false;
        }
    }
    public function plogin(Request $request)
    {
        //luego hago EL BAN -> Habilitar cuenta luego de
        $array = usuario::where('nombre_usuario', $request->email)->where('clave', md5($request->passs))->get()->first();
        if (!empty($array)) {
            session([
                'id' => $array->id,
                'nombre' => $array->nombre,
                'foto' => $array->foto,
                'rol' => strtoupper($array->rol)
            ]);
            return redirect()->to('home/')->send();
        } else {
            return redirect()->to('login/')->send();
        }
    }
    public function Pregister(Request $request)
    {
        return redirect()->to('preferences/')->send();
    }
}
