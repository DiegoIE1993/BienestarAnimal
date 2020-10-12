<?php

namespace App\Http\Controllers;
use App\Models\Especies;
use App\Models\Raza;
use App\Models\RegistrarMascota;
use Illuminate\Http\Request;

class RegistrarMascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro = RegistrarMascota::all();
        return view('registrarmascota.index', compact('registro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specie = Especies::all();
        
        return view('registrarmascota.create', compact('specie'));
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
     * @param  \App\Models\RegistrarMascota  $registrarMascota
     * @return \Illuminate\Http\Response
     */
    public function show(RegistrarMascota $registrarMascota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistrarMascota  $registrarMascota
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistrarMascota $registrarMascota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistrarMascota  $registrarMascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistrarMascota $registrarMascota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistrarMascota  $registrarMascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistrarMascota $registrarMascota)
    {
        //
    }
}
