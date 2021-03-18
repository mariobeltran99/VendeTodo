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
    public function preferences()
    {
        return view('preferences');
    
    }
    public function viewUsers()
    {
        return view('adminUsers');
    }
    public function home(){
        return view('home');
    }
    public function myArticules()
    {
        return view('myArticules');
    }
    public function sell(){
        return view('sell');
    }
    public function cover(){
        return view('cover');
    }
}
