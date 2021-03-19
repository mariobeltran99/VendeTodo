<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class UsuarioController extends Controller
{
    public function login()
    {
        return view('user.login');
    }
    public function register()
    {
        $listd = file_get_contents("http://my-json-server.typicode.com/joseolivares/elsalvador_states/deptos");
        $listd = json_decode($listd);
        return view('user.register', compact('listd'));
    }
    public function viewUsers()
    {
        return view('cpanel.adminUsers');
    }
    public function home()
    {
        return view('user.home');
    }
    public function cover()
    {
        return view('Product.cover');
    }
    public function editUser()
    {
        if (!empty(session('id'))) {
            $arrayUser = usuario::find(session('id'));
            return view('user.editUser', compact('arrayUser'));
        } else {
            return redirect()->to('login/')->send();
        }
    }
    public function loginRegister(Request $request)
    {
        if ($this->existEmail($request->name)) {
            return view('user.login', [
                'email' => $request->name
            ]);
        } else {
            $listd = file_get_contents("http://my-json-server.typicode.com/joseolivares/elsalvador_states/deptos");
            $listd = json_decode($listd);
            return view('user.register', [
                'email' => $request->name,
                'listd' => $listd
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
