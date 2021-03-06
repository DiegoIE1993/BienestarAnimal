<?php

namespace App\Http\Controllers;

use App\Models\AnimalesAdopcion;
use App\Models\RegistrarMascota;
use App\Models\SolicitudAdopciones;
use Illuminate\Http\Request;

class AnimalesAdopcionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=> 'show']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $registro = RegistrarMascota::where('disponibilidad', '=','Disponible')->get();
        return view('animalesadopcion.index', compact('registro'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnimalesAdopcion  $animalesAdopcion
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $registro = RegistrarMascota::where('disponibilidad', '=','Disponible')->get(); 
        return view('animalesadopcion.show', compact('registro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnimalesAdopcion  $animalesAdopcion
     * @return \Illuminate\Http\Response
     */
    public function edit(AnimalesAdopcion $animalesAdopcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnimalesAdopcion  $animalesAdopcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnimalesAdopcion $animalesAdopcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnimalesAdopcion  $animalesAdopcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnimalesAdopcion $animalesAdopcion)
    {
        //
    }
}
