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
        $arrayUser = usuario::find(1);
        return view('editUser', compact('arrayUser'));
    }
    public function loginRegister(Request $request)
    {
        $array = usuario::where('nombre_usuario', $request->name);
        if (count($array) == 0) {
            return "Registro";
        } else {
            return "login";
        }
        return 0;
    }
}
