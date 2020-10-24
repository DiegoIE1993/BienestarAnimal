<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SolicitudAdopciones;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;
use League\CommonMark\Block\Element\Document;

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
        $data = request()->validate([
            'nombre'=> 'Required',
            'cedula' => 'Required',
            'telefono' => 'Required',
            'direccion' => 'Required',
            'correo' => 'Required',
            'documentos' => 'Required',
            
        ]);

        $ruta_documentos = $request['documentos']->store('upload-documentos', 'public');
         Storage::path("storage/{$ruta_documentos}"); 

        DB::table('solicitud_adopciones')->insert([
            'nombre' => $data['nombre'],
            'cedula' => $data['cedula'],
            'telefono' => $data['telefono'],
            'direccion' => $data['direccion'],
            'correo' => $data['correo'],
            'documentos' => $ruta_documentos,
             
        ]);

        return redirect('animalesadopcion/show')->with('success', 'data saved');
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
