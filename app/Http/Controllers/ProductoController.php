<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class ProductoController extends Controller
{
    public function viewProduct(){
        return view('viewProduct');
    }
}
