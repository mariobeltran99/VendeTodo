<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visita;

class VisitasController extends Controller
{
    public function viewsPage()
    {

        return view('viewsPage');
    }
    public function privacy()
    {

        return view('footer.privacyPolicy');
    }
    public function conditions()
    {

        return view('footer.serviceConditions');
    }
    public function cars()
    {

        return view('footer.cars');
    }
    public function classified()
    {

        return view('footer.classified');
    }
    public function platform()
    {

        return view('footer.platformUsage');
    }
    public function conducting()
    {

        return view('footer.conductingBusiness');
    }
}
