<?php

namespace App\Http\Controllers;

use App\Models\Educacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EducacionController extends Controller
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
        $educations = Educacion::all();
        return view('educacion.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('educacion.create');
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
            'titulo'=> 'Required',
            'video' => 'Required',

        ]);

        $cadena=$data['video'];
        $cadena= explode("v=",$cadena);
        $cadena= "https://www.youtube.com/embed/".$cadena[1];
    
        DB::table('educacions')->insert([
            'titulo' => $data['titulo'],
            'video' => $cadena,
            
        ]);

        return redirect('/educacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Educacion  $educacion
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $educations = Educacion::all();

        return view('educacion.show', compact('educations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Educacion  $educacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Educacion $educacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Educacion  $educacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Educacion $educacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Educacion  $educacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Educacion $educacion)
    {
        //
    }
}
