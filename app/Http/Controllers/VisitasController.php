<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visita;

class VisitasController extends Controller
{
    public function viewsPage(){

        return view('viewsPage');
    }
    public function privacy(){

        return view('privacyPolicy');
    }
    public function conditions(){

        return view('serviceConditions');
    }
    public function cars(){

        return view('cars');
    }
    public function classified(){

        return view('classified');
    }
    public function platform(){

        return view('platformUsage');
    }
    public function conducting(){

        return view('conductingBusiness');
    }

}
