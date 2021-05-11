<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use Session;

class UsuarioController extends Controller
{
    public function login()
    {
        if (empty(session('rol'))) {
            return view('user.login');
        } else {
            return redirect()->to('home/')->send();
        }
    }
    public function register()
    {
        if (empty(session('rol'))) {
            $listd = file_get_contents("http://my-json-server.typicode.com/joseolivares/elsalvador_states/deptos");
            $listd = json_decode($listd);
            return view('user.register', compact('listd'));
        } else {
            return redirect()->to('home/')->send();
        }
    }
    public function viewUsers()
    {
        if (session('rol') == 'A') {
            return view('cpanel.adminUsers');
        } else {
            return redirect()->to('home/')->send();
        }
    }
    public function home()
    {
        if (!empty(session('id'))) {
            return view('user.home');
        } else {
            return redirect()->to('login/')->send();
        }
    }
    public function cover()
    {
        return view('Product.coverProduct');
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
            return redirect()->route('login')->with('email', $request->name);
        } else {
            return redirect()->route('register')->with('email', $request->name);
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
            return redirect()->to('login/')->send()->with('alertLogin', true);
        }
    }
    public function Pregister(Request $request)
    {
        return redirect()->to('preferences/')->send();
    }
    public function cerrar_sesion(){
        Session::flush();
        return redirect()->to('/');
    }
    public function admonUser(Request $request)
    {

    }
}
