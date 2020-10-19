<?php

namespace App\Http\Controllers;

use App\Models\Educacion;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function get_welcome(){
        $educations = Educacion::all();

        return view('welcome', compact('educations'));
        
    }
}
