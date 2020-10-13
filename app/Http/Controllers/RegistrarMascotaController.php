<?php

namespace App\Http\Controllers;

use App\Models\Raza;
use App\Models\Especies;
use App\Models\TipoEntrada;
use Illuminate\Http\Request;
use App\Models\ActitudGeneral;
use App\Models\CondicionGeneral;
use App\Models\RegistrarMascota;
use Illuminate\Support\Facades\DB;

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
        $races = Raza::all();
        $condicions = CondicionGeneral::all();
        $entradas = TipoEntrada::all();
        $actitudes = ActitudGeneral::all();
        return view('registrarmascota.create', compact('specie','races','condicions','entradas','actitudes'));
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
            'nombres'=> 'Required',
            'direccion' => 'Required',
            'cedula' => 'Required',
            'telefono' => 'required',
            'correo' => 'required',
            'genero' => 'required',
            'telefono' => 'required',
            'telefono' => 'required',
            'telefono' => 'required',
            'telefono' => 'required',
            'telefono' => 'required',
            'telefono' => 'required',
            'telefono' => 'required',
            'telefono' => 'required',
        ]);

        DB::table('nosotros')->insert([
            'nombres' => $data['nombres'],
            'direccion' => $data['direccion'],
            'cedula' => $data['cedula'],
            'correo' => $data['correo'],
            'genero' => $data['genero'],
            'telefono' => $data['telefono'],
            'telefono' => $data['telefono'],
            'telefono' => $data['telefono'],
            'telefono' => $data['telefono'],
            'telefono' => $data['telefono'],
            'telefono' => $data['telefono'],
            'telefono' => $data['telefono'],
            'telefono' => $data['telefono'],
        ]);

        return redirect('/registarmascota');
        
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
