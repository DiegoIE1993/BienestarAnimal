<?php

namespace App\Http\Controllers;

use App\Models\Raza;
use App\Models\Especies;
use App\Models\TipoEntrada;
use Illuminate\Http\Request;
use App\Models\ActitudGeneral;
use App\Models\CondicionGeneral;
use App\Models\RegistrarMascota;
use Carbon\Traits\Timestamp;
use Illuminate\Support\Facades\DB;

class RegistrarMascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        
        $registro = RegistrarMascota::all();
        $entradas = TipoEntrada::all();
        $specie = Especies::all();
        $races = Raza::all();
        $condicions = CondicionGeneral::all();
        $actitudes = ActitudGeneral::all();
        return view('registrarmascota.create', compact('registro','entradas','specie','races','condicions','actitudes'));
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
          
        'tipo_entrada_id' => 'Required',
        'codigo_animal' => 'Required',
        'nombre_ciudadano'=> 'Required',
        'direccion' => 'Required',
        'cedula' => 'Required',
        'telefono' => 'Required',
        'correo' => 'Required',
        'nombre_ejemplar' => 'Required',
        'genero' => 'Required',
        'especie_id' => 'Required',
        'raza_id' => 'Required',
        'color' => 'Required',
        'talla' => 'Required',
        'peso' => 'Required',
        'edad' => 'Required',
        'condicion_id' => 'Required',
        'actitud_id' => 'Required',
        'estado' => 'Required',
        'señales_particulares' => 'Required',
        'motivo_ingreso_anamnesis' => 'Required',
        
        
        

         ]);
            DB::table('registrar_mascotas')->insert([

            'tipo_entrada_id' => $data['tipo_entrada_id'],
            'codigo_animal' => $data['codigo_animal'], 
            'nombre_ciudadano' => $data['nombre_ciudadano'],
            'direccion' => $data['direccion'],
            'cedula' => $data['cedula'],
            'telefono' => $data['telefono'],
            'correo' => $data['correo'],
            'nombre_ejemplar' => $data['nombre_ejemplar'],
            'genero' => $data['genero'],
            'especie_id' => $data['especie_id'],
            'raza_id' => $data['raza_id'],
            'color' => $data['color'],
            'talla' => $data['talla'],
            'peso' => $data['peso'],
            'edad' => $data['edad'],
            'condicion_id' => $data['condicion_id'],
            'actitud_id' => $data['actitud_id'],
            'estado' => $data['estado'],
            'señales_particulares' => $data['señales_particulares'],
            'motivo_ingreso_anamnesis' => $data['motivo_ingreso_anamnesis'],
            
        ]);

        return redirect('/registrarmascota');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrarMascota  $registrarMascota
     * @return \Illuminate\Http\Response
     */
    public function show($codigo_animal)
    {
        $item = RegistrarMascota::findOrFail($codigo_animal);

        return view('registrarmascota.show', compact('item'));
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
