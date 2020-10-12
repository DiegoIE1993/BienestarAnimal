<?php

namespace App\Http\Controllers;

use App\Models\ActitudGeneral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActitudGeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actitud = ActitudGeneral::all(); // actitud variable que va a ser igual al controller Razas
        return view ('actitudgeneral.index', compact('actitud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('actitudgeneral.create');
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
        ]);

        DB::table('actitud_generals')->insert([
            'nombre' => $data['nombre'],
        ]);

        return redirect('/actitudgeneral');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActitudGeneral  $actitudGeneral
     * @return \Illuminate\Http\Response
     */
    public function show(ActitudGeneral $actitudGeneral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ActitudGeneral  $actitudGeneral
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actitud = ActitudGeneral::findOrFail($id);

        return view('actitudgeneral.edit', compact('actitud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ActitudGeneral  $actitudGeneral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $actitud = ActitudGeneral::findOrFail($id);
       
        $actitud->nombre =$request->nombre;
        
        $actitud->save();

        return redirect('/actitudgeneral');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ActitudGeneral  $actitudGeneral
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actitud = ActitudGeneral::findOrFail($id);
        //Eliminar Actitud General
        if ($actitud->delete()){
            return redirect('/actitudgeneral');
        }
        else
        {
            return response() ->json([
                'mensaje' => 'Error al eliminar condicion general'
            ]);
        }
    }
}
