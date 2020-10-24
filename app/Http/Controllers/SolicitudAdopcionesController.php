<?php

namespace App\Http\Controllers;

use App\Models\SolicitudAdopciones;
use Illuminate\Http\Request;

class SolicitudAdopcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\SolicitudAdopciones  $solicitudAdopciones
     * @return \Illuminate\Http\Response
     */
    public function show(SolicitudAdopciones $solicitudAdopciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SolicitudAdopciones  $solicitudAdopciones
     * @return \Illuminate\Http\Response
     */
    public function edit(SolicitudAdopciones $solicitudAdopciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SolicitudAdopciones  $solicitudAdopciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SolicitudAdopciones $solicitudAdopciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SolicitudAdopciones  $solicitudAdopciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(SolicitudAdopciones $solicitudAdopciones)
    {
        //
    }
}
