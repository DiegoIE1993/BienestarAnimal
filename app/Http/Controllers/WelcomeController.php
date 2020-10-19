<?php

namespace App\Http\Controllers;

use App\Models\Nosotros;
use App\Models\Educacion;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function get_welcome(){
        
        $educations = Educacion::latest()->take(3)->get();
        $info = Nosotros::all();

        return view('welcome', compact('educations','info'));
        
    }
}