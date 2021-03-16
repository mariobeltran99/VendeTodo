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
<<<<<<< HEAD
    public function preferences()
    {
        return view('preferences');
=======
    public function home(){
        return view('home');
    }
    public function viewUsers(){
        return view('adminUsers');
>>>>>>> 16bab728a0e34f87d41d0db1f39034fc7b279908
    }
}
