<?php

namespace App\Http\Controllers;

use SEO;
use App\Models\Eventos;
use App\Models\Nosotros;
use App\Models\Educacion;
use Illuminate\Http\Request;
use App\Models\RegistrarMascota;
use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{
    
     
    public function get_welcome(){
        
        SEO::setTitle('unidad de proteccion animal');
        SEO::setDescription('unidad de proteccion animal');
        SEO::opengraph()->setUrl('http://ejemplo.com');
        SEO::setCanonical('https://ejemplo.com');
        SEO::opengraph()->addProperty('type', 'welcome');
        SEO::twitter()->setSite('@ejemplo');

        $registro = RegistrarMascota::latest()->take(3)->get();
        $registro = RegistrarMascota::where('disponibilidad', '=','Disponible')->get();
        $educations = Educacion::latest()->take(3)->get();
        $info = Nosotros::all();
        $events = Eventos::latest()->take(3)->get();

        return view('welcome', compact('educations','info','registro','events'));
        
        
    }

}
