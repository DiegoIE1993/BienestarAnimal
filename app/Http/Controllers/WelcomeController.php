<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use App\Models\Nosotros;
use App\Models\Educacion;
use Illuminate\Http\Request;
use App\Models\RegistrarMascota;
use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{
    public function get_welcome(){
        $registro = RegistrarMascota::latest()->take(3)->get();
        $registro = RegistrarMascota::where('disponibilidad', '=','Disponible')->get();
        $educations = Educacion::latest()->take(3)->get();
        $info = Nosotros::all();
        $events = Eventos::latest()->take(3)->get();

        return view('welcome', compact('educations','info','registro','events'));
        
        
    }

}
