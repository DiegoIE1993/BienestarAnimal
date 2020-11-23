<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\RegistrarMascota;
use Illuminate\Support\Facades\DB;
use App\Models\SolicitudAdopciones;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;
use League\CommonMark\Block\Element\Document;

class SolicitudAdopcionesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except'=> 'show']);

    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $adopcions = SolicitudAdopciones::all();
        $registro = RegistrarMascota::all();
        return view('solicitudadopciones.index', compact('adopcions','registro'));
        
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
            'adopcion_id' => 'Required',
            
            
        ]);

        $fecha_actual = Carbon::now();

        $ruta_documentos = $request['documentos']->store('upload-documentos', 'public');
         Storage::path("storage/{$ruta_documentos}");  

        DB::table('solicitud_adopciones')->insert([
            'fecha' => $fecha_actual,
            'nombre' => $data['nombre'],
            'cedula' => $data['cedula'],
            'telefono' => $data['telefono'],
            'direccion' => $data['direccion'],
            'correo' => $data['correo'],
            'documentos' => $ruta_documentos,
            'adopcion_id' => $data['adopcion_id'],
            
        ]);

        return redirect('animalesadopcion/show')->with('success', 'data saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SolicitudAdopciones  $solicitudAdopciones
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $adopcions = SolicitudAdopciones::all();
        
        return view('solicitudadopciones.index', compact('adopcions'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SolicitudAdopciones  $solicitudAdopciones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitud = SolicitudAdopciones::findOrFail($id);

        return view('solicitudadopciones.edit', compact('solicitud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SolicitudAdopciones  $solicitudAdopciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $solicitud = SolicitudAdopciones::findOrFail($id);
        $solicitud->nombre =$request->nombre;
        $solicitud->cedula =$request->cedula;
        $solicitud->telefono =$request->telefono;
        $solicitud->direccion =$request->direccion;
        $solicitud->correo =$request->correo;
        $solicitud->estado_solicitud =$request->estado_solicitud;
        
        $solicitud->save();

        return redirect('/solicitudadopciones');
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
